<?php

namespace Tendaz\Http\Controllers\Api\Auth;

use Illuminate\Http\Request;
use Tendaz\Http\Controllers\Controller;
use Tendaz\Models\Cart\Cart;
use Tendaz\Models\Customer;
use Tendaz\Transformers\CartTransformer;
use Tendaz\Transformers\CustomerTransformer;
use League\Fractal\Serializer\ArraySerializer;
use Webpatser\Uuid\Uuid;

class LoginController extends Controller
{
    public function auth(Cart $cart , Request $request)
    {
        $credentials = $request->only('email', 'password');


        if (! auth('web')->attempt($credentials)) {
            return   response(["Username password does not match"], 401  );
        }

        Cart::createOrAssignUser($cart , auth('web')->user());

        return response(fractal()
            ->item(auth('web')->user(), new CustomerTransformer())
            ->serializeWith(new ArraySerializer())
            ->withResourceName('users')
            ->toJson() , 201);
    }

    public function assignUserToOrder($email , Cart $cart , Request $request)
    {
        if (Customer::where('email' , $email)->exists()){
            $customer = Customer::where('email' , $email)->first();
        }else{
            $customer = Customer::create([
                'shop_id' => $request->shop->id,
                'uuid'    =>  Uuid::generate(4)->string,
                'email'   =>  $email
            ]);
        }
        $cart->customer_id = $customer->id;
        $cart->save();
        $cart->order->customer_id = $customer->id;
        $cart->order->save();
        return response()->json( fractal()->item($cart, new CartTransformer()), 201);
    }

    public function update(Customer $customer ,  Request $request )
    {
        $customer->update($request->except('email'));
        $customer->cartsOpen->first()->order->update([
            'email' => $request->email
        ]);
        return response()->json( fractal()->item($customer->cartsOpen->first(), new CartTransformer()), 201);
    }
    
}
