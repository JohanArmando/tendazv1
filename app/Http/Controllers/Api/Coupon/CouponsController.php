<?php

namespace Tendaz\Http\Controllers\Api\Coupon;

use Tendaz\Events\applyCouponToCartEvent;
use Tendaz\Http\Controllers\Controller;
use Tendaz\Models\Cart\Cart;
use Tendaz\Models\Coupon\Coupon;
use Tendaz\Transformers\CartTransformer;

class CouponsController extends Controller
{
    public function show(Cart $cart ,$coupon)
    {
        $coupon = Coupon::getByCondition($coupon , $cart);
        if ($coupon->exists()){
            event(new applyCouponToCartEvent($cart->order , $coupon));

            return response()->json( fractal()->item($cart->order->cart, new CartTransformer()), 201);
        }else{
            return response()->json(['Coupon no exists'] , 401);
        }
    }
}
