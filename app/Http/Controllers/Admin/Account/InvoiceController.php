<?php

namespace Tendaz\Http\Controllers\Admin\Account;

use Illuminate\Http\Request;
use Tendaz\Http\Requests;
use Tendaz\Http\Controllers\Controller;

class InvoiceController extends Controller
{

    public function index(){

       // $invoices = Auth('admins')->users()->originalSubscription->first()->state->where('status','confirmed');

       // $invoices = Auth('admins')->user()->originalSubscription->first()->state->where('status','confirmed');

        return view('admin.account.invoices' , compact('invoices'));
    }

    public function postInvoice(Request $request){
        Auth('admins')->user()->fill($request->all())->save();
        return redirect()->back()->with('message' , ['type' => 'success' , 'message' => 'Tus datos de facturacion fueron actualizados con exito']);
    }
}
