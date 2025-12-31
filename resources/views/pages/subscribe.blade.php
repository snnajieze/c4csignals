@extends('layouts/header-footer')

@section('title', 'Subscribe')

@section('content')

<div class="bg-gray-100 my-12 rounded-lg">
    <div class="w-full max-w-3xl mx-auto p-8">
        <div class="bg-white p-8 rounded-lg shadow-md border dark:border-gray-700">
            <h1 class="text-2xl font-bold text-gray-800  mb-4">Checkout</h1>
        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('create-subscription') }}">
            @csrf

            @php
                $plan = request()->get('plan');
                $cycle = request()->get('cycle');

                $plans = [
                    'plan1' => [
                        'name' => 'Crypto',
                        'monthly' => 70,
                        'yearly'  => 299,
                    ],
                    'plan2' => [
                        'name' => 'Forex',
                        'monthly' => 50,
                        'yearly'  => 299,
                    ],
                    'plan3' => [
                        'name' => 'Crypto + Forex',
                        'monthly' => 100,
                        'yearly'  => 399,
                    ],
                ];

                if (isset($plans[$plan]) && isset($cycle)) {
                    $planName = $plans[$plan]['name'];
                    $price = $plans[$plan][$cycle];
                } else {
                    return redirect('/#pricing')->send();
                }
            @endphp

            




            <div class="w-full max-w-md bg-white rounded-2xl shadow-lg p-6 md:p-8 mx-auto">
                <!-- Header -->
                <h2 class="text-2xl font-bold text-gray-800 text-center">Order Details</h2>

                <!-- Product Details -->
                <div class="mt-6 flex space-x-4">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800 text-center">{{ $planName }}  {{ ucfirst($cycle) }} subscription</h3>
                    </div>
                </div>

                

                <livewire:checkout :plan="$planName" :price="$price" :cycle="$cycle" />

                <!-- Plan details and final price are handled inside the Livewire component -->


                <!-- Payment Options -->
                <div class="mt-6">
                    <p class="block text-gray-700 font-medium mb-2">Payment Method</p>
                    <div class="block mt-4">
                        <label class="flex items-center">
                            <input type="radio" name="payment_method" value="crypto" class="text-primary-600 focus:ring-primary-500 border-gray-300 rounded" checked>
                            <span class="ms-2 text-sm text-gray-600">Crypto - Pay with any crypto and network</span>
                        </label>

                    </div>
                    <div class="block mt-4">
                        <label class="flex items-center">
                            <input type="radio" name="payment_method" value="credit_card" class="text-primary-600 focus:ring-primary-500 border-gray-300 rounded" disabled>
                            <span class="ms-2 text-sm text-gray-600">Credit Card</span>
                        </label>
                    </div>
                    <div class="block mt-4">
                        <label class="flex items-center">
                            <input type="radio" name="payment_method" value="paypal" class="text-primary-600 focus:ring-primary-500 border-gray-300 rounded" disabled>
                            <span class="ms-2 text-sm text-gray-600">PayPal</span>
                        </label>
                    </div>
                    <div class="flex items-center space-x-3 mt-4">
                        <button class="flex-1 bg-gray-100 hover:bg-gray-200 transition p-3 rounded-lg" disabled>
                            <img src="https://upload.wikimedia.org/wikipedia/commons/2/2a/Mastercard-logo.svg" alt="Mastercard" class="h-6 mx-auto">
                        </button>
                        <button class="flex-1 bg-gray-100 hover:bg-gray-200 transition p-3 rounded-lg" disabled>
                            <img src="https://upload.wikimedia.org/wikipedia/commons/0/04/Visa.svg" alt="Visa" class="h-6 mx-auto">
                        </button>
                        <button class="flex-1 bg-gray-100 hover:bg-gray-200 transition p-3 rounded-lg" disabled>
                            <img src="https://upload.wikimedia.org/wikipedia/commons/b/b5/PayPal.svg" alt="PayPal" class="h-6 mx-auto">
                        </button>
                    </div>
                </div>

                <!-- Checkout Button -->
                <button class="mt-6 w-full bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-3 rounded-lg shadow-md hover:shadow-lg transition duration-200">
                    Complete Purchase
                </button>

                <!-- Secure Payment Notice -->
                <p class="text-center text-gray-500 text-sm mt-4">🔒 Secure Payment. Your information is encrypted.</p>
            </div>

        </form>
        </div>
    </div>
</div>

{{-- <p>Your referral link:</p>
<input type="text" value="{{ url('/register?ref=' . auth()->user()->referral_code) }}" readonly>
 --}}


@endsection
