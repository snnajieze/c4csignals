<?php

namespace App\Livewire;

use Livewire\Component;
use App\Services\CouponService;
use Illuminate\Validation\ValidationException;


class Checkout extends Component
{
    // public $couponCode = '';
    public $plan;
    public $price;
    public $cycle;
    public $couponCode;
    public $finalPrice;
    public $message;

    public function mount($plan = null, $price = null, $cycle = null)
    {
        // Initialize values passed from the parent view
        $this->plan = $plan;
        $this->price = $price;
        $this->cycle = $cycle;
        $this->finalPrice = $this->price;
    }

    public function applyCoupon(CouponService $couponService)
    {
        // Reset previous errors/messages
        $this->resetErrorBag();
        $this->message = '';

        // 1️⃣ Empty field check
        if (empty($this->couponCode)) {
            $this->addError('couponCode', 'Please enter a coupon code.');
            return;
        }

        // 2️⃣ Basic format validation
        $this->validate([
            'couponCode' => 'string|min:3|max:30',
        ], [
            'couponCode.string' => 'Coupon code must be a valid text.',
            'couponCode.min'    => 'Coupon code is too short.',
        ]);

        // Ensure a plan is present
        if (empty($this->plan) || empty($this->price)) {
            $this->addError('couponCode', 'Please select a subscription plan before applying a coupon.');
            return;
        }

        // 3️⃣ Apply coupon against the original cycle price
        $response = $couponService->apply(
            trim($this->couponCode),
            $this->cycle,
            $this->price
        );

        // 4️⃣ Handle failure statuses
        if ($response['status'] !== 'success') {
            $messages = [
                'not_found' => 'Coupon not found.',
                'inactive' => 'Coupon is not active.',
                'expired' => 'Coupon has expired.',
                'usage_limit' => 'Coupon usage limit has been reached.',
                'cycle_mismatch' => 'This Coupon can only be applied to yearly cycle.',
            ];

            $this->addError('couponCode', $messages[$response['status']] ?? 'Invalid coupon.');
            return;
        }

        // 5️⃣ Success
        $this->finalPrice = $response['final_price'];
        $this->message = 'Coupon applied successfully.';
    }

    public function render()
    {
        return view('livewire.checkout');
    }
}
