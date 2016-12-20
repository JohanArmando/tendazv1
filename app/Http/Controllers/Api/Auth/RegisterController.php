<?php

namespace Tendaz\Http\Controllers\Api\Auth;

use Validator;
use Tendaz\Models\Customer;
use Illuminate\Http\Request;
use Tendaz\Models\Cart\Cart;
use Tendaz\Http\Controllers\Controller;
use Tendaz\Transformers\CustomerTransformer;
use League\Fractal\Serializer\ArraySerializer;

class RegisterController extends Controller
{
    protected function validator(array $data , $shopId)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'phone' => 'sometimes|numeric',
            'email' => "required|email|max:255|unique:customers,email,". null . ',shop_id,shop_id,' . $shopId ,
            'password' => 'required|min:6|confirmed',
        ]);
    }


    public function register(Cart $cart , Request $request)
    {
        $credentials = $request->all();
        $this->validator($credentials , $request->shop->id)->validate();
            $user = Customer::create([
                "email"			=> $request->email,
                "password"		=> $request->password,
                "name"			=> $request->name,
                "last_name"		=> $request->last_name,
                "phone"         => isset($request->phone) ? $request->phone : null,
                "shop_id"       => $request->shop->id
            ]);
            
        Cart::createOrAssignUser($cart , $user);

        return response(fractal()
            ->item($user, new CustomerTransformer())
            ->serializeWith(new ArraySerializer())
            ->withResourceName('users')
            ->toJson() , 201);
    }
        

}
