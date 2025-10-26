@extends('layouts/header-footer')

@section('title', 'Dashboard')

@section('content')

{{--
<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-label for="name" value="{{ __('Name') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ms-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ms-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>

--}}



<div class="bg-gray-100 my-12 rounded-lg">
    <div class="w-full max-w-3xl mx-auto p-8">
        <div class="bg-white p-8 rounded-lg shadow-md border dark:border-gray-700">
            <h1 class="text-2xl font-bold text-gray-800  mb-4">Checkout</h1>
        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
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

            


            <!-- Shipping Address -->
            <div class="mb-6">
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="fname" class="block text-gray-700  mb-1">First Name</label>
                        <input type="text" id="fname" class="w-full rounded-lg border py-2 px-3 bg-gray-300  dark:border-none" name="fname" value="{{old('fname')}}" autofocus required autocomplete="name">
                    </div>
                    <div>
                        <label for="lname" class="block text-gray-700  mb-1">Last Name</label>
                        <input type="text" id="lname" class="w-full rounded-lg border py-2 px-3 bg-gray-300  dark:border-none" name="lname" value="{{old('lname')}}" required>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4 mt-4">
                    <div>
                        <label for="email" class="block text-gray-700  mb-1">Email</label>
                        <input type="text" id="email" class="w-full rounded-lg border py-2 px-3 bg-gray-300  dark:border-none" name="email" value="{{old('email')}}" required autocomplete="username">
                    </div>
                    <div>
                        <label for="tg_id" class="block text-gray-700  mb-1">Telegram ID Number</label>
                        <input type="text" id="tg_id" class="w-full rounded-lg border py-2 px-3 bg-gray-300  dark:border-none" placeholder="This is NOT your username" name="tg_id" value="{{old('tg_id')}}" required>
                        <p>Use this link to get your USER ID: <a href="https://t.me/userinfobot" target="_blank">https://t.me/userinfobot</a></p>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4 mt-4">
                    <div>
                        <label for="password" class="block text-gray-700  mb-1">Password</label>
                        <input type="password" id="password" class="w-full rounded-lg border py-2 px-3 bg-gray-300  dark:border-none" name="password" value="{{old('password')}}" required>
                    </div>
                    <div>
                        <label for="password_confirmation" class="block text-gray-700  mb-1">Confirm Password</label>
                        <input type="password" id="password_confirmation" class="w-full rounded-lg border py-2 px-3 bg-gray-300  dark:border-none" name="password_confirmation" required>
                    </div>
                </div>

                <div class="mt-4">
                    <label for="address" class="block text-gray-700  mb-1">Address</label>
                    <input type="text" id="address" class="w-full rounded-lg border py-2 px-3 bg-gray-300  dark:border-none" name="address" value="{{old('address')}}" required>
                </div>

                <div class="grid grid-cols-2 gap-4 mt-4">
                    <div>
                        <label for="city" class="block text-gray-700  mb-1">City</label>
                        <input type="text" id="city" class="w-full rounded-lg border py-2 px-3 bg-gray-300  dark:border-none" name="city" value="{{old('city')}}" required>
                    </div>
                    <div>
                        <label for="country" class="block text-gray-700  mb-1">Country</label>
                        <select class="w-full rounded-lg border py-2 px-3 bg-gray-300" id="country" name="country" value="{{old('country')}}" required>
                            <option>Select country</option>
                            @foreach($countries as $code => $name)
                                <option value="{{ $code }}">{{ $name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4 mt-4">
                    <div>
                        <label for="state" class="block text-gray-700  mb-1">State</label>
                        <input type="text" id="state" class="w-full rounded-lg border py-2 px-3 bg-gray-300  dark:border-none" name="state" value="{{old('state')}}" required>
                    </div>
                    <div>
                        <label for="zip_code" class="block text-gray-700  mb-1">ZIP Code</label>
                        <input type="text" id="zip_code" class="w-full rounded-lg border py-2 px-3 bg-gray-300  dark:border-none" name="zip_code" value="{{old('zip_code')}}" required>
                    </div>
                </div>
            </div>

            <div class="w-full max-w-md bg-white rounded-2xl shadow-lg p-6 md:p-8 mx-auto">
                <!-- Header -->
                <h2 class="text-2xl font-bold text-gray-800 text-center">Order Details</h2>

                <!-- Product Details -->
                <div class="mt-6 flex space-x-4">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800 text-center">{{ $planName }}  {{ ucfirst($cycle) }} subscription</h3>
                    </div>
                </div>

                <!-- Price Breakdown -->
                <div class="mt-6 space-y-3">
                    <div class="flex justify-between text-gray-600">
                        <span>Subtotal</span>
                        <span>{{ $price ? '$'.$price : 'N/A' }}</span>
                    </div>
                    <div class="flex justify-between font-semibold text-gray-800">
                        <span>Total</span>
                        <span>{{ $price ? '$'.$price : 'N/A' }}</span>
                    </div>
                </div>

                <input type="hidden" name="plan_name" value="{{ $planName }}">
                <input type="hidden" name="cycle" value="{{ ucfirst($cycle )}}">
                <input type="hidden" name="price" value="{{ $price }}">


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

            <!-- <div class="mt-8 flex justify-end">
                <button class="px-6 py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition font-medium">
                    Complete Purchase
                </button>
            </div> -->
        </form>
        </div>
    </div>
</div>

{{-- <p>Your referral link:</p>
<input type="text" value="{{ url('/register?ref=' . auth()->user()->referral_code) }}" readonly>
 --}}


@endsection
