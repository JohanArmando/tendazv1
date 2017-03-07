<?php

namespace Tendaz\Http\Controllers\Api\Address;

use Illuminate\Http\Request;
use Tendaz\Models\Cart\Cart;
use Tendaz\Http\Controllers\Controller;
use Tendaz\Models\Shipping\ShippingMethod;
use Tendaz\Transformers\CartTransformer;


class ShippingMethodsController extends Controller
{
    public function index(Cart $cart)
    {
        return ShippingMethod::OptionsByCart($cart);
    }

   	public function servientrega(Cart $cart, Request $request)
   	{
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
   		return ['data' => ['products' => $Shipping, 'from' => $cart->customer->shop->store->city->name.'-'.$cart->customer->shop->store->city->state->name, 'to' => $address->city->name.'-'.$address->state->name ]];
   	}
}
