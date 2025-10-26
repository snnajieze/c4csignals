<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Subscription;

class SubscriptionController extends Controller
{
    /**
     * Redirect user to NowPayments checkout
     */
    public function checkout($subscription_id)
    {
        $subscription = Subscription::findOrFail($subscription_id);
        $user = auth()->user();

        $apiKey = env('NOWPAYMENTS_API_KEY');

        // Create invoice via NOWPayments API
        $response = Http::withHeaders([
            'x-api-key' => $apiKey,
            'Content-Type' => 'application/json',
        ])->post('https://api.nowpayments.io/v1/invoice', [
            'price_amount' => $subscription->price,
            'price_currency' => 'usd', // Adjust if needed
            'order_id' => $subscription->id,
            'order_description' => ucfirst($subscription->cycle) . " subscription for {$subscription->plan_name} signals",
            'ipn_callback_url' => route('nowpayment.callback'),
            'success_url' => route('nowpayment.success', $subscription->id),
            'cancel_url' => route('nowpayment.cancel', $subscription->id),
        ]);

        $invoice = $response->json();

        if (isset($invoice['invoice_url'])) {
            return redirect($invoice['invoice_url']);
        }

        return redirect('/payment-initialize-error')->with('error', 'Payment could not be initialized.');
    }

    /**
     * Handle NowPayments IPN callback
     */
        public function callback(Request $request)
    {
        $orderId = $request->order_id;
        $paymentStatus = strtolower($request->payment_status); // finished, waiting, failed, etc.

        $subscription = Subscription::where('id', $orderId)->first();

        if (!$subscription) {
            return response()->json(['error' => 'Invalid subscription'], 400);
        }

        // ✅ Optional but recommended: Verify NOWPayments signature
        $ipnSecret = env('NOWPAYMENTS_IPN_SECRET');
        $receivedSignature = $request->header('x-nowpayments-sig');

        if ($ipnSecret && $receivedSignature) {
            $generatedSignature = hash_hmac('sha512', $request->getContent(), $ipnSecret);

            if (!hash_equals($generatedSignature, $receivedSignature)) {
                return response()->json(['error' => 'Invalid signature'], 401);
            }
        }

        // ✅ Update subscription on successful payment
        if (in_array($paymentStatus, ['finished', 'confirmed'])) {
            $subscription->update([
                'payment_status' => true,
                'sub_status' => true,
            ]);
            // Send email to user
            \Mail::to($subscription->user->email)->send(
                new \App\Mail\SubscriptionConfirmedMail($subscription)
            );
        }

        return response()->json(['status' => 'ok']);
    }

    /**
     * Payment success page
     */
    public function success($subscriptionId)
    {
        $subscription = Subscription::findOrFail($subscriptionId);
        return view('payments.success', compact('subscription'));
    }

    /**
     * Payment cancel page
     */
    public function cancel($subscriptionId)
    {
        $subscription = Subscription::findOrFail($subscriptionId);
        return view('payments.cancel', compact('subscription'));
    }

    public function invoke()
    {
        $user = auth()->user();
        $subscription = \App\Models\Subscription::where('user_id', $user->id)->latest()->first();

        if ($subscription) {
            // return redirect('/payment-initialize-error')->with('error', 'Payment could not be initialized.');
            // return route('nowpayment.checkout', ['subscription_id' => $subscription->id]);
            // return redirect('nowpayment.checkout', ['subscription_id' => $subscription->id]);

            return redirect()->route('nowpayment.checkout', ['subscription_id' => $subscription->id]);


        }

        // return '/dashboard';

        return redirect('/dashboard');

    }
}
