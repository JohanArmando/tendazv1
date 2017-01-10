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
        //previamente en el carrito cargamos los metodos de pago disponibles para esa tienda
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
        //aqui retornamos el carrito cambiando las payment_preferences describiendo el metodo y el token(mas adelante otras coass custom como excluir metodos y iva y demas)
        //include marcar la orden con el metodo de pago escogigo
        //generar un evento para marcar la orden
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
        $response = $mp->post('/v1/card_tokens' ,[
            'public_key'       => 'APP_USR-68e8ac0a-8966-4411-bb30-b1ea95c1b1cc',
            'card_id'          => '4013540682746260',
            'expiration_year'  => 2019,
            'expiration_month' => 12,
            'first_six_digits' => 401354,
            'last_four_digits' => 6260,
            'security_code_length'  => 3,
            'cardholder' => [
                'name' => 'Johan Villamil',
                'identification' => [
                    'number' => '1013646891',
                    'type'   => 'CC'
                ]
            ]
        ]);
        return $response;
        $card_token =  (string) $response['response']['id'];
        return $response;
        $payment = $mp->post('/v1/payments' ,
            [
                'transaction_amount' => 10000 ,'payment_method_id' => "visa",
                "payer" => ['email' => 'test_user_89339222@testuser.com'] ,
                'token' => $card_token
            ]);
        return $payment;
    }
}
