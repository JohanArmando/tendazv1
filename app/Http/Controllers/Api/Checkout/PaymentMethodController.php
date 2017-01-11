<?php

namespace Tendaz\Http\Controllers\Api\Checkout;

use Illuminate\Http\Request;
use Tendaz\Api\Mercadopago;
use Tendaz\Http\Controllers\Controller;
use Tendaz\Models\Cart\Cart;
use Tendaz\Models\Payment_method\PaymentValue;
use Tendaz\Transformers\CartTransformer;

class PaymentMethodController extends Controller
{
    public function checkPayment(Cart $cart , PaymentValue $payment , Request $request)
    {
        if ($payment->payment_method_id  == 1){
            return $this->mercadopago($payment , $cart);
        }else{
            return $this->custom($payment , $cart);
        }
    }

    public function mercadopago(PaymentValue $payment , Cart $cart)
    {
        $mp = new Mercadopago($payment->api_id , $payment->api_key);
        $access_token = $mp->get_access_token();
        return fractal()
            ->item($cart, new CartTransformer($access_token))
            ->toJson();
    }

    public function custom(PaymentValue $payment , Cart $cart)
    {
        //aqui retornamos el carrito cambiando las payment_preferences describiendo el metodo el descuento si hay y la description
    }

    public function doPayment(Cart $cart , PaymentValue $payment , Request $request)
    {
        $mp = new Mercadopago($request->token);
        //Crear un token para la tarjeta
        //crear url para responser el metodo de pago
        //entonces debe de venir el equest
        $response = $mp->post('/v1/card_tokens' ,[
            'public_key'       => 'APP_USR-68e8ac0a-8966-4411-bb30-b1ea95c1b1cc',
            "expiration_month" => 12,
            "expiration_year"  =>  2017,
            "security_code"    => "123",
            'cardholder' => [
                'identification' => [
                    'number' => "1013646891",
                    'type'   => 'CC'
                ],
                'name' => "APRO"
            ],
            "card_number" => "4013540682746260"
        ]);
        $card_token =  (string) $response['response']['id'];
        //luego realizar el pago
        $payment = $mp->post('/v1/payments' ,
            array(
                "transaction_amount" => 100,
                "token" => $card_token,
                "description" => "Title of what you are paying for",
                "installments" => 1,
                "payment_method_id" => "visa",
                "payer" => array (
                    "email" => "info@tendaz.com"
                )
            ));
        return $payment;
    }
}
