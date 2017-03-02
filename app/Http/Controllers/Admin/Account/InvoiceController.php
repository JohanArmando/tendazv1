<?php

namespace Tendaz\Http\Controllers\Admin\Account;

use Illuminate\Http\Request;
use Tendaz\Http\Requests;
use Tendaz\Http\Controllers\Controller;
use Tendaz\Models\Subscription\Plan;
use Tendaz\Models\Subscription\Subscription;

class InvoiceController extends Controller
{

    public function index($subdomain, Request $request){

        $invoices = Subscription::where('shop_id',$request->shop->id)->get();
        $subscription = $request->shop->subscription_id;
        $plans = Plan::all();
        return view('admin.account.invoices' , compact('invoices','plans','subscription'));
    }

    public function postInvoice(Request $request){
        Auth('admins')->user()->fill($request->all())->save();
        return redirect()->back()->with('message' , ['type' => 'success' , 'message' => 'Tus datos de facturacion fueron actualizados con exito']);
    }
}
