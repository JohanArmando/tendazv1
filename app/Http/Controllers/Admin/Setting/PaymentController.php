<?php

namespace Tendaz\Http\Controllers\Admin\Setting;

use Illuminate\Http\Request;

use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Tendaz\Http\Requests;
use Tendaz\Http\Controllers\Controller;
use Tendaz\Models\Payment_method\PaymentMethod;
use Tendaz\PaymentForm;
use Tendaz\PaymentShop;
use Tendaz\Transformers\PaymentMethodsTransformers;
use Tendaz\Transformers\PaymentTransformer;
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

    /**
     * @param Request $request
     * @return string
     */
    public function getAll(Request $request)
    {
        if($request->wantsJson()){
            return  $this->allPayment();
        }
    }

    public function deActivate(Request $request)
    {
        if($request->wantsJson()){
            $this->payment->avaliable = 0;
            $this->payment->save();
            Cache::forget($this->domain.'_payments');
            return  $this->allPayment();
        }
    }

    public function show(Request $request)
    {
        if($request->wantsJson()){
         
        }
    }

    public function update(Request $request)
    {
        if($request->wantsJson()){
            if($this->payment){
                $this->payment->fill($request->all())->save();
            }else{
                $payment = Payment::create($request->all());
                if($payment->payment_form_id == 2){
                    $payment->description = 'Te redirigimos a MercadoPago par aque finalices tu transaccion.';
                }
                if($payment->payment_form_id == 4){
                    $payment->description = 'Cuando termines la compra, vas a ver la información de pago.';
                }
                $payment->save();
            }
            Cache::forget($this->domain.'_payments');
            return  $this->allPayment();
        }
    }

    /**
     * @return string
     */
    public function allPayment(){
        $payments = Cache::get($this->domain.'_payments');
        if(!$payments){
            $payments = fractal()
                ->collection(PaymentForm::all() , new PaymentTransformer() , 'payments')
                ->toJson();
            Cache::put($this->domain.'_payments' , $payments , 120);
        }
        return  $payments;
    }

}
