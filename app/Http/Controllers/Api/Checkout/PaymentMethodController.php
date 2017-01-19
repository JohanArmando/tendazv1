<?php

namespace Tendaz\Http\Controllers\Api\Checkout;

use Illuminate\Http\Request;
use Tendaz\Api\Mercadopago;
use Tendaz\Http\Controllers\Controller;
use Tendaz\Models\Api\Payment\MePa;
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

        $cart->order->payment_method = $payment->id;
        $cart->order->save();

        return fractal()
            ->item($cart, new CartTransformer($access_token))
            ->toJson();
    }

    public function custom(PaymentValue $payment , Cart $cart)
    {
        $cart->order->payment_method = $payment->id;
        $cart->order->save();
        return fractal()
            ->item($cart, new CartTransformer())
            ->toJson();
    }

    public function doPayment(Cart $cart , PaymentValue $payment , Request $request)
    {
        //queda una posible solucion un archivo de traduccione por metodo entonces traduce a que clase es la dueña asi evitamos el if y solo enviar los metodoos
        //unificar todas las pasarelas de apgos en paquetes
        //queda pendiente si un trans para un metodo de pago es lo mejor
        //optimizar las tablas
        //optimizar el metodo para el transformerts que muestra algunos datos segun el metodo de apgo
        //revisar como optimizar cuando hay muchas insercciones
        //revisar como optimizar cuando se hace un join largo
        //revisar como optimar muchos datos de estadisiticas
        //2537364453
        //tablas raras = supcriciones , orders , order_status ,address , metodos de pago
        if ($payment->payment_method_id == 1){
            $mp = new MePa($cart , $request->token, $request);
            $payment = $mp->generate();
		return $payment;
            $cart->order->updateStatus($payment['response']['status']);
            
            $cart->order->api_id =  $payment['response']['id'];
            $cart->order->save();
            //actualizar order items puede ser un evento
            $cart->closed();
            
            return response([
                'status' => $payment['response']['status'],
                'description' => $payment['response']['status_detail'],
            ] ,$payment['status']);

        }else{
            $cart->order->updateStatus("approved");
            $cart->closed();
            return response([
                'status' => 'approved',
                'description' => 'payment_success',
            ] ,201);
        }
    }
}
