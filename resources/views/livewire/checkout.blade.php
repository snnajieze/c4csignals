<div>
    <!-- Plan Summary -->
    <div class="mt-4 mb-4">
        <div class="text-sm text-gray-600">Plan</div>
        <div class="font-semibold text-lg">{{ $plan ?? 'N/A' }} @if($cycle) ({{ ucfirst($cycle) }}) @endif</div>
    </div>

    <!-- Price Breakdown -->
    <div class="mt-6 space-y-3">
        <div class="flex justify-between text-gray-600">
            <span>Subtotal</span>
            <span>{{ $price ? '$'.$price : 'N/A' }}</span>
        </div>
        <div class="flex justify-between font-semibold text-gray-800">
            <span>Total</span>
            <span>{{ $finalPrice ? '$'.$finalPrice : 'N/A' }}</span>
        </div>
    </div>

    <!-- Hidden inputs for parent form submission -->
    <input type="hidden" name="plan_name" value="{{ $plan }}">
    <input type="hidden" name="cycle" value="{{ ucfirst($cycle) }}">
    <input type="hidden" name="price" value="{{ $finalPrice }}">
    <!-- Coupon Code Section -->
    <div class="containermx-auto max-w-xl p-6">
        <!-- Coupon Code Card Form -->
        <div class="bg-gray-100  p-6 rounded-lg shadow-lg">

            <h1 class="text-2xl font-semibold mb-4">Apply Coupon Code</h1>

            <!-- Coupon Code Input -->
            <div class="mb-4">
                <label for="coupon" class="block text-gray-700 font-semibold mb-2">Coupon Code:</label>
                <input wire:model.defer="couponCode" type="text" id="couponCode" name="couponCode" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-500 focus:border-blue-500" placeholder="Enter your coupon code">
            </div>

            <!-- Apply Button -->
            <div class="text-center">
                <button wire:click.prevent="applyCoupon" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-500 focus:border-blue-500">
                        Apply Coupon
                </button>
            </div>

            <!-- Coupon Code Result -->
            <div class="mt-4">
                @error('couponCode')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
                @if($message)
                    <p class="text-blue-500">{{ $message }}</p>
                @endif
            </div>
        </div>
    </div>

</div>