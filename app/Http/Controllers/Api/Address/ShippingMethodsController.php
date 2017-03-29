<?php

namespace Tendaz\Http\Controllers\Api\Address;

use Illuminate\Http\Request;
use Tendaz\Models\Cart\Cart;
use Tendaz\Models\store\Shop;
use Tendaz\Http\Controllers\Controller;
use Tendaz\Models\Shipping\ShippingMethod;
use Tendaz\Events\updateShippingOrderEvent;
use Tendaz\Transformers\CartTransformer;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class ShippingMethodsController extends Controller
{
    public function index(Cart $cart)
    {
        return ShippingMethod::OptionsByCart($cart);
    }

   	public function servientrega(Cart $cart, Request $request)
   	{
        $shop = Shop::find($request->client_id);

        if ($shop->servientrega) {
            $Shipping = [];

            foreach ($cart->products as $variant) {
              $volumeInMeter = ($variant->product->large*0.01)*($variant->product->height*0.01)*($variant->product->width*0.01);
              $weightVolumetric  = (222*$volumeInMeter);
              if ($variant->weight > $weightVolumetric) {
                array_push($Shipping,['weight' => $variant->weight, 'price' => $variant->price ]);
              }
              else
              {
                array_push($Shipping,['weight' => $weightVolumetric, 'price' => $variant->price ]);

              }

            }
            $address = $cart->customer->addresses()->where('uuid',$request->address_id)->first();
            $order = $cart->order;
            $order->shipping_address_id = $address->id;
            $order->save();
            $client = new Client([
                // Base URI is used with relative requests
                'base_uri' => env('SERVIENTREGA_API'),
                'headers' => [
                  'User-Agent' => 'testing/1.0',
                  'Accept' => 'application/json',
                  'Content-Type' => 'application/json'
                ]

            ]);
            //dd($client);
            if (isset($cart->customer->shop->store->city->name)) {
              try {
                  $response = $client->post('servientrega/index', [
                    'json' => [
                      'products' => $Shipping,
                      'from' => $cart->customer->shop->store->city->name.'-'.$cart->customer->shop->store->city->state->name,
                      'to' => $address->city->name.'-'.$address->state->name
                    ]
                  ]);
                  $total = 0;

                  $prices = json_decode($response->getBody());
                  foreach ($prices as $value) {
                    $total = $total + $value;
                  }
                  //return $prices;
                  $order = $cart->order;
                  $order->shipping_address_id = $address->id;
                  $order->save();

                  event(new updateShippingOrderEvent($cart->order , $total));


                  return response()->json([
                      'message' => "Perfecto ya calculamos tu envio :$ ".number_format($total , 2),
                      'cart' => fractal()->item($cart, new CartTransformer())
                      ], 201);

              } catch (RequestException $e) {
                return ShippingMethod::OptionsByCart($cart);
              }

            }else{
              return ShippingMethod::OptionsByCart($cart);
              //return response()->json(
                //['message' => 'la tienda no tiene envio disponible.' , 'cart' => fractal()->item($cart, new CartTransformer()) ] , 404);
            }
        }else
        {
            return ShippingMethod::OptionsByCart($cart);
        }
      
    }
}


//$client = new Client([ 'base_uri' => env('SERVIENTREGA_API'), 'headers' => ['User-Agent' => 'testing/1.0', 'Accept' => 'application/json', 'Content-Type' => 'application/json']]);

//$response = $client->post('servientrega/index', ['form_params' => ['products' => [{"weight" => "4.5","price" => "10000"}],'from' => 'BOGOTA-CUNDINAMARCA','to' => 'ABEJORRAL-ANTIOQUIA']]);
