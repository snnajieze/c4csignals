<?php 

namespace App\Services;

use App\Models\Coupon;

class CouponService
{
    public function apply(string $code, string $cycle, float $price): array
    {
        // Normalize the code
        // $code = strtoupper(trim($code));
        $code = trim($code);
        $coupon = Coupon::where('code', $code)->first();

        if (! $coupon) {
            return ['status' => 'not_found', 'message' => 'Coupon not found.'];
        }

        if (! $coupon->is_active) {
            return ['status' => 'inactive', 'message' => 'Coupon is not active.'];
        }

        if ($coupon->isExpired()) {
            return ['status' => 'expired', 'message' => 'Coupon has expired.'];
        }

        if ($coupon->usage_limit && $coupon->used_count >= $coupon->usage_limit) {
            return ['status' => 'usage_limit', 'message' => 'Coupon usage limit reached.'];
        }

        // Check cycle eligibility
        if ($coupon->cycle && $coupon->cycle !== $cycle) {
            return ['status' => 'cycle_mismatch', 'message' => 'Coupon is not valid for this cycle.'];
        }

        if ($coupon->discount_type === 'percentage') {
            $discount = ($coupon->discount_value / 100) * $price;
        } else {
            $discount = $coupon->discount_value;
        }

        $final = max($price - $discount, 0);

        return [
            'status' => 'success',
            'final_price' => $final,
            'discount' => $discount,
            'coupon' => $coupon,
        ];
    }
}
