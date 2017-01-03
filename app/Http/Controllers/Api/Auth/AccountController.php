<?php

namespace Tendaz\Http\Controllers\Api\Account;

use Illuminate\Http\Request;
use Tendaz\Http\Controllers\Controller;
use Tendaz\Models\Customer;

class AccountController extends Controller
{
    public function update(Customer $customer)
    {
        return  [$customer];
    }
}
