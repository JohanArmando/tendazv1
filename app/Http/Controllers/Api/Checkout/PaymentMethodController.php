<?php

namespace Tendaz\Http\Controllers\Api\Checkout;

use Illuminate\Http\Request;
use Tendaz\Api\Mercadopago;
use Tendaz\Http\Controllers\Controller;
use Tendaz\Models\Cart\Cart;
use Tendaz\Models\Payment_method\PaymentValue;

class PaymentMethodController extends Controller
{
    public function checkPayment(Cart $cart , PaymentValue $payment , Request $request)
    {
        if ($payment->payment_method_id  == 1){
            return $this->mercadopago($request , $payment);
        }
    }

    public function mercadopago(Request $request ,  PaymentValue $payment)
    {
        $mp = new Mercadopago($payment->api_id , $payment->api_key);
        $access_token = $mp->get_access_token();
        //$mp = new Mercadopago($access_token);
        //$response = $mp->post("/v1/payments");
        return $access_token;
    }
}
