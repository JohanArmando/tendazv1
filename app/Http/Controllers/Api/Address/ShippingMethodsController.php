<?php

namespace Tendaz\Http\Controllers\Api\Address;

use Illuminate\Http\Request;
use Tendaz\Http\Controllers\Controller;
use Tendaz\Models\Cart\Cart;
use Tendaz\Models\Shipping\ShippingMethod;
use Tendaz\Transformers\ShippingMethodTransformer;

class ShippingMethodsController extends Controller
{
    public function index(Cart $cart)
    {
        return fractal()
            ->collection(ShippingMethod::OptionsByCart($cart)->get(), new ShippingMethodTransformer())
            ->withResourceName('shipping_methods')
            ->toJson();
    }
}
