<?php

namespace Tendaz\Http\Controllers\Api\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Tendaz\Http\Controllers\Controller;
use Tendaz\Models\Customer;
use Tendaz\Transformers\CustomerTransformer;

class PasswordController extends Controller
{
    public function change(Customer $customer , Request $request)
    {
        $this->validate($request , [
            'current_password' => 'required|hash_check:'.$customer->password,
            'password' => 'required|min:6|confirmed|sameData:'.$request->get('current_password'),
            'password_confirmation' => 'required|min:6'
        ]);

        $customer->password = $request->get('password');
        $customer->save();

        return response(['status' => trans('api.change.password')], 200);
    }
}
