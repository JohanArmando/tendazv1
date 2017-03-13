<?php

namespace Tendaz\Http\Controllers\Admin\Account;

use Illuminate\Http\Request;
use Tendaz\Http\Requests;
use Tendaz\Http\Controllers\Controller;
use Tendaz\Models\Subscription\Plan;
use Tendaz\Api\Twocheckout;
use Tendaz\Models\Subscription\Subscription;

class InvoiceController extends Controller
{

    public function index($subdomain, Request $request)
    {

        $invoices = Subscription::where('shop_id',$request->shop->id)->get();
        $subscription = $request->shop->subscription_id;
        $plans = Plan::all();
        return view('admin.account.invoices' , compact('invoices','plans','subscription'));
    }

    public function show($subdomain , $id)
    {
        $invoice = Subscription::where('uuid',$id)->first();
        $Subscription = Subscription::find(Auth('admins')->user()->shop->subscription_id);
        Twocheckout::verifySSL(false);
        Twocheckout::sandbox(env('SANBOX_TWO',false));
        Twocheckout::username(env('USER_TWO'));
        Twocheckout::password(env('PASSWORD_TWO'));

        $args = array(
            'sale_id' => $Subscription->sale_id
        );
        try {
            $result = Twocheckout\Api\Twocheckout_Sale::retrieve($args);
        } catch (Twocheckout_Error $e) {
            $e->getMessage();
        }
        //return $result;
        //return $result['sale']['customer']['cardholder_name'];
        return view('admin.account.my-invoice',compact('invoice','result'));
    }

    public function edit(){
        return view('admin.account.invoice-print');
    }

    public function postInvoice(Request $request){
        Auth('admins')->user()->fill($request->all())->save();
        return redirect()->back()->with('message' , ['type' => 'success' , 'message' => 'Tus datos de facturacion fueron actualizados con exito']);
    }
}
