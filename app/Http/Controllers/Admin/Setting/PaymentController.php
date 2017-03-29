<?php

namespace Tendaz\Http\Controllers\Admin\Setting;

use Illuminate\Http\Request;

use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Tendaz\Http\Requests;
use Tendaz\Http\Controllers\Controller;
use Tendaz\Models\Payment_method\PaymentMethod;
use Tendaz\Models\Payment_method\PaymentValue;
use Tendaz\PaymentForm;
use Tendaz\PaymentShop;
use Tendaz\Transformers\PaymentMethodsTransformers;
use Tendaz\Transformers\PaymentTransformer;
use Tendaz\Transformers\PaymentValueTransformer;
use Tendaz\url\DomainStore;

class PaymentController extends Controller
{
    public function index(Request $request)
    {
        if ($request->wantsJson()){
           return fractal()
               ->collection(PaymentMethod::all() , new PaymentMethodsTransformers() , 'payments')
               ->withResourceName('payments')
               ->toJson();
        }
        return view('admin.setting.payment');
    }

    public function show($subdomain , $uuid ,Request $request)
    {

        if($request->wantsJson()){
            if (PaymentValue::find($uuid)){
                return response()->json(PaymentValue::find($uuid));
            }
            return  [];
        }
    }

    public function disable($subdomain, $payment_value_id)
    {
        $payment = PaymentValue::where('uuid',$payment_value_id)->first();
        $payment->avaliable = 0;
        $payment->save();
        return $payment;
    }
}
