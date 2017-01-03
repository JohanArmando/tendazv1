<?php

namespace Tendaz\Http\Controllers\Api\Auth;

use Illuminate\Http\Request;
use Tendaz\Http\Controllers\Controller;
use Tendaz\Models\Customer;
use Tendaz\Transformers\CustomerTransformer;

class AccountController extends Controller
{
    public function update(Customer $customer ,Request $request)
    {
        $customer->update($request->all());
        return response(fractal()
            ->item($customer, new CustomerTransformer())
            ->toJson() , 201);
    }
}
