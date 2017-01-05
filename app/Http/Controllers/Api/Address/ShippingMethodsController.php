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
}
