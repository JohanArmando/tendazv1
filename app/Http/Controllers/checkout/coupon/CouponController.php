<?php

namespace Tendaz\Http\Controllers\checkout\coupon;

use Tendaz\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Tendaz\Http\Requests;
use Tendaz\CartTendaz;
use Tendaz\Coupon;
use Cart;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function redeem(Request $request)
    {
       $code_coupon =  $request->coupon;
       $coupon = Coupon::getByCondition($code_coupon);
        if($coupon->exists()){
            $isApply = true;
            switch ($coupon->type){
                case 'percentage' :
                    Coupon::couponAddToCart($coupon , true);
                    break;
                case 'absolute' :
                    Coupon::couponAddToCart($coupon , false);
                    break;
                case 'shipping':
                    Cart::getCondition('shipping') ? CartTendaz::conditionsShippingCoupon($code_coupon) : $isApply = false;
                    break;
            }
            $isApply ? $message = ['type' => 'success' , 'message' => 'El cupón se aplico correctamente.'] : $message = ['type' => 'danger' , 'message' => 'No tienes metodo de envio para aplicar este cupon.'];
        }else{
            $message = ['type' => 'danger' , 'message' => 'El cupón es inválido o no aplicable para esta compra..'];
        }
        return back()->with('message' , $message);
    }
    
}
