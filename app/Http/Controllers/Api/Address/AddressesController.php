<?php

namespace Tendaz\Http\Controllers\Api\Address;

use Illuminate\Http\Request;
use Tendaz\Http\Controllers\Controller;
use Tendaz\Models\Address\Address;
use Tendaz\Models\Address\CustomerAddress;
use Tendaz\Models\Cart\Cart;
use Tendaz\Models\Customer;
use Tendaz\Models\Geo\State;
use Tendaz\Models\Order\Order;
use Tendaz\Transformers\AddressTransformer;
use Tendaz\Transformers\CartTransformer;
use Webpatser\Uuid\Uuid;

class AddressesController extends Controller
{
    public function index(Cart $cart , Customer $customer)
    {
        return response()->json(
            fractal()
            ->collection(  $customer->addresses, new AddressTransformer())
            ->withResourceName('addresses')    , 200);
    } 
    
    public function store(Cart $cart ,Customer $customer , Request $request)
    {
        $address = Address::create($request->all());
        $pivot = CustomerAddress::create([
            'customer_id' => $customer->id,
            'address_id' => $address->id,
            'isPrimary' => 1
        ]);
        $cart->order->shipping_address_id = $pivot->id;
        $cart->order->billing_address_id = $pivot->id;
        $cart->order->save();
        
        return response()->json([
                'addresses' => fractal()
                ->collection(  $customer->addresses, new AddressTransformer())
                ->withResourceName('addresses'),
                'cart' =>  fractal()
                    ->item($cart ,  new CartTransformer())
                    ->withResourceName('addresses')   ], 200);
    }

    public function getAddress()
    {
        $states = State::where('country_id' , 50)->get(['id' , 'name']);
        return response()->json(['states' => $states] , 200);
    }
    
    public function getCities(State $state)
    {
        $cities = $state->cities()->get(['id' , 'name']);
        return response()->json(['cities' => $cities] , 200);
    }
    public function addressForServi(Request $request){
        return response()->json( $request->all(), 201);
    }
}
