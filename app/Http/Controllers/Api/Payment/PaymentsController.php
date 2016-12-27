<?php

namespace Tendaz\Http\Controllers\Api\Payment;

use Tendaz\Api\Mercadopago;
use Tendaz\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Request;
use Tendaz\Models\Cart\Cart;
use Tendaz\Models\Payment_method\PaymentMethod;
use Tendaz\Models\Payment_method\PaymentValue;
use Tendaz\Transformers\PaymentValueTransformer;
use Webpatser\Uuid\Uuid;

class PaymentsController extends Controller
{
    public function index()
    {
        $payent_values =  PaymentValue::all();
        return fractal()
                ->collection($payent_values , new PaymentValueTransformer())
                ->toJson();
    }

    public function show(PaymentValue $paymentValue  , Cart $cart, Request $request)
    {

        $method = $paymentValue->paymentMethod;
        $cart->status = 'closed';
        $cart->save();
        switch ($method->id){
            case 1:
                $mp = new Mercadopago($paymentValue->api_id, $paymentValue->api_key);
                $title = '';
                $description = '';
                $quantity = 0;
                $price = 0;
                foreach ($cart->products as $product){
                    $title .=  $product->pivot->quantity.' '.$product->product->name.' - ';
                    $description .=  ' '.$product->product->description;
                    $quantity = 1;
                    $price +=  ($product->product->collection->promotion ? $product->promotional_price : $product->price) * $product->pivot->quantity;
                }
                $preference_data = array(
                    "items" => [
                        array(
                                'id'    => $cart->secure_key,
                                'title' => $title,
                                'currency_id' => 'COL',
                                'picture_url' => $cart->products[0]->product->MainImage(),
                                'description' => $description,
                                'quantity' => $quantity,
                                'unit_price' => $price
                        )
                    ],
                    "payer" => array(
                        "name" => $cart->order->name,
                        "surname" => $cart->order->last_name,
                        "email" => $cart->customer->email,
                        "date_created" => $cart->order->created_at,
                        "phone" => array(
                            "area_code" => "57",
                            "number" => $cart->order->phone
                        ),
                        "identification" => array(
                            "type" => "CC",
                            "number" => $cart->order->indentification
                        ),
                    ),
                    "back_urls" => array(
                        "success" => $request->shop->domains->where('main', 1)->first()->domain.'/checkout/success',
                        "failure" => $request->shop->domains->where('main', 1)->first()->domain.'/checkout/failure',
                        "pending" => $request->shop->domains->where('main', 1)->first()->domain.'/checkout/pending'
                    ),
                    "auto_return" => "approved",
                    "payment_methods" => array(
                        "excluded_payment_methods" => array(
                        ),
                        "excluded_payment_types" => array(
                        ),
                        "installments" => 24,
                        "default_payment_method_id" => null,
                        "default_installments" => null,
                    ),
                    "shipments" => array(
                        "mode" => "custom",
                        "cost" => (int) $cart->order->total_shipping,
                        "receiver_address" => array(
                            "zip_code" => 111461,
                            "street_number"=> $cart->order->shippingAddress->street,
                            "street_name"=> $cart->order->shippingAddress->name,
                            "floor"=> '',
                            "apartment"=> $cart->order->shippingAddress->complement
                        )
                    ),
                    "notification_url" => env('APP_URL').'/notifications/mercadopago',
                    "external_reference" => $cart->order->uuid,
                    "expires" => false,
                    "expiration_date_from" => null,
                    "expiration_date_to" => null
                );
                $preference = $mp->create_preference($preference_data);
                return ['url' => $preference['response']['init_point']];
                break;
        }
    }
    
    public function update($uuid , Request $request)
    {
        $method = PaymentMethod::where('uuid' , $request->payment_method_id)->first();
        $data = $request->except(['payment_method_id' , 'client_secret' , 'client_id']);
        $request->shop->payments_values()->updateExistingPivot($method->id , $data);

    }
    
    public function store(Request $request)
    {
        $method = PaymentMethod::where('uuid' , $request->payment_method_id)->first();
        $data = $request->except(['payment_method_id' , 'client_secret' , 'client_id']);
        $data['uuid'] = Uuid::generate(4)->string;
        $request->shop->payments_values()->attach($method->id , $data);
        return response()->json($request->except('payment_method_id'));
    }
}