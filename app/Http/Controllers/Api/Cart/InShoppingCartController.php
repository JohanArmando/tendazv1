<?php

namespace Tendaz\Http\Controllers\Api\Cart;

use Illuminate\Http\Request;
use League\Fractal\Serializer\ArraySerializer;
use Tendaz\Events\updateOrderTotalByProductEvent;
use Tendaz\Http\Controllers\Controller;
use Tendaz\Models\Cart\Cart;
use Tendaz\Models\Customer;
use Tendaz\Models\Products\Product;
use Tendaz\Models\Products\Variant;
use Tendaz\Transformers\CartTransformer;

class InShoppingCartController extends Controller
{
    public function index(Cart $cart)
    {
        return  fractal()
            ->item($cart, new CartTransformer())
            ->withResourceName('cart')
            ->toJson();
    }

    public function store(Cart $cart , Request $request)
    {
        if(!$cart->customer_id && $request->customer_id){
            Cart::createOrAssignUser($cart , Customer::where('uuid' , $request->customer_id)->first());   
        }
        $item = Variant::where('uuid' , $request->item_id)->first();
        
        $inShoppingCart =  $cart->products()->where('item_id' , $item->id)->first();
        $quantity = $request->get('quantity' , !$inShoppingCart ? 1 : $inShoppingCart->pivot->quantity + 1 );
        $quantity = $quantity <= 0 ? 1 : $quantity;
        if (! is_null($inShoppingCart)){

            if ($item->stock == 'unlimited' || $item->stock >= $quantity ){
                $inShoppingCart->pivot->update([
                   'quantity' => $quantity
                ]);
                event(new updateOrderTotalByProductEvent($cart->order , $cart));
                return  fractal()
                    ->item($cart, new CartTransformer())
                    ->toJson();
            }
            return response()->json(fractal()
                ->item($cart, new CartTransformer()) , 409);
        }
        else
            $cart->products()->attach( $item->id, ['quantity' => $quantity]);
            event(new updateOrderTotalByProductEvent($cart->order , $cart));
            return response()->json(['Item add'] , 201);
    }

    public function destroy(Cart $cart , Variant $item , Request $request)
    {
        $cart->products()->detach($item->id);
        event(new updateOrderTotalByProductEvent($cart->order , $cart));
        return response()->json( fractal()->item($cart, new CartTransformer()), 201);
    }
}
