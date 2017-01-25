<?php

namespace Tendaz\Http\Controllers\Admin\Account;

use Illuminate\Http\Request;
use Tendaz\Http\Controllers\Controller;

class SubscriptionController extends Controller
{
    public function start(Request $request)
    {
        $plan = $request->shop->subscription()->plan;
        return view('admin.account.payment-plan' , ['plan' => $plan]);
    }
}
