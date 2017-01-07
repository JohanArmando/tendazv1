<?php

namespace Tendaz\Http\Controllers\Api\Cart;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Tendaz\Http\Controllers\Controller;
use Tendaz\Models\Cart\Cart;
use Tendaz\Models\Cart\ShoppingCart;
use Tendaz\Models\Domain\Domain;

class CartController extends Controller
{

    public function store(Request $request)
    {
        $shopping_cart_id = $request->cart_id;

        $shopping_cart = Cart::findOrCreateBySessionID($shopping_cart_id , $request->shop->id);

        return [compact('shopping_cart')];
    }

    public function destroy(Cart $cart)
    {
        $cart->products()->detach();
        return [compact('cart')];
    }
    
    
}
