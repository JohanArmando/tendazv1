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
}
