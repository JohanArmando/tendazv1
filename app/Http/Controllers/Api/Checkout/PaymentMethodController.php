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
        //$customer = $mp->post('/users/test_user' , ["site_id" => "MCO"]);
        //return $customer;

        //$customer = $mp->get("/users/240378513");
        //return $customer;
        //$customer = $mp->post ("/v1/customers", array("email" => "test@test.com"));
        //return $customer;

       /* $filters = array (
            "email" => "test@test.com"
        );
        $customer = $mp->get ("/v1/customers/search", $filters);
        return $customer;*/
        //$cards = $mp->get ("/v1/customers/240383382-LYLQ3cLTsa21O8/cards");
        //return $cards;
        //$customer = $mp->post ("/v1/customers", array("email" => "test4@test.com" , "first_name" => 'Johan' , 'last_name' => 'Villamil' ,  'identification' => [
        //    'number' => '1013646891',
        //    'type'   => 'CC'
        //]));
        //return $customer;
        $response = $mp->post('/v1/card_tokens' ,[
            'public_key'       => 'APP_USR-68e8ac0a-8966-4411-bb30-b1ea95c1b1cc',
            'expiration_year'  => 2019,
            'expiration_month' => 12,
            'first_six_digits' => "450995",
            'last_four_digits' => "3704",
            'security_code_length'  => 3,
            'cardholder' => [
                'identification' => [
                    'number' => '1013646891',
                    'type'   => 'CC'
                ]
            ]
        ]);       return $response;
        $card_token =  (string) $response['response']['id'];

        //$card = $mp->post("/v1/customers/".$customer['response']['results'][0]['id']."/cards" ,array("token" => $card_token));
        //return $card;
        $payment = $mp->post('/v1/payments' ,
            array(
                "transaction_amount" => 100,
                "token" => $card_token,
                "description" => "Title of what you are paying for",
                "payer" => array (
                    "email" => "test_user_19653727@testuser.com"
                ),
                "installments" => 3,
                "payment_method_id" => "master",
                "issuer_id" => 338
            ));
        return $payment;
    }
}
