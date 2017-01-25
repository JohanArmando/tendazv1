<?php

namespace Tendaz\Http\Controllers\Admin\Account;


use MP;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Tendaz\Http\Controllers\Controller;
use Tendaz\Models\Subscription\Plan;
use Webpatser\Uuid\Uuid;

class PlanController extends Controller
{
    public function swap($subdomain , Plan $plan ,Request $request)
    {
        if ($request->shop->subscription()->onTrial())
        {
            $request->shop->subscription()->swap($plan);
            return back()->with('message' , ['type' => 'info' , 'message' => 'El plan de tu subscripcion ha cambiado']);
        }
        return redirect()->to('admin/account/checkout/start?ref=from_payment_bottom_bar');
    }

    public function index()
    {
        $plans = Plan::orderBy('name','ASC')->get();
        return view('admin.account.plans' , compact('plans'));
    }

    public  function  postChangePlan(Request $request ){
        if($this->auth->onTrial()){
            $this->subscription->plan_id = $this->plan->id;
            $this->subscription->save();
            return redirect()->back();
        } else{
            return redirect()->to('admin/account/plan/checkout/start');
        }
    }


    public function getCheckout(){
        return view('admin.account.payment-plan')->with('plan',$this->plan);
    }



    public function recurringPayment(Request $request){
        if($request->ajax()){
            if($request->get('method') == 'cc'){
                $plan = Plan::where('uuid' , $request->_X_PLAN)->first();
                if($plan){
                    return response()->json([
                        'plan'      => $plan,
                        'recurring' => $request->months,

                        'users'      => Auth::client()->get(),

                        'user'      => Auth::client()->get(),

                        'shop'      => Auth::client()->get()->shop,
                        'sid'       => env('2CHECK_SID')
                    ]);
                }
                return response()->json(401);
            }
        }
    }

    public function ticketPayment(Request $request){
        $plan = Plan::where('uuid' , $request->_X_PLAN)->first();
        if(!$plan){
            return response()->json($request->all());
        }
        if($request->months >= 3){
            $price = ($plan->price * $request->months) * 0.90;
        }else{
            $price = ($plan->price * $request->months);
        }
        if($request->months == 12){
            $price = ($plan->price * $request->months) * 0.80;
        }
        $preferenceData = [
            "back_urls"=> array (
                "success"=> 'http://www.midominio.com/transaccion_exitosa',
                "failure"=> 'http://www.midominio.com/transaccion_erronea'
            ),
            "notification_url" => 'saassa',
            'items' => [
                [
                    'id' => $plan->uuid,
                    'category_id' => 'phones',
                    'title' => $request->months.' meses del plan '.$plan->name,
                    'description' => $plan->description,
                    'picture_url' => '',
                    'quantity' => 1,
                    'currency_id' => 'USD',
                    'unit_price' => $price,
                ]
            ],
            "payment_methods" =>[
                "excluded_payment_types" => [
                    array( "id"=>"credit_card"), array("id"=>"bank_transfer"), array("id"=>"atm")
                ]
            ],
            "payer" => [
                "name" => Auth::client()->get()->name,
                "username" => Auth::client()->get()->last_name,
                "email" => $request->country.'-'.Auth::client()->get()->email,
            ],
            "back_urls" => [
                "success" => url('admin/account/checkout/finish/'),
                "failure" => url('admin/account/checkout/finish/'),
                "pending" => url('admin/account/checkout/finish/')
            ],
            "auto_return" =>  "approved",
            "external_reference" => "Reference_".Uuid::generate(4),
        ];

        $preference = MP::create_preference($preferenceData);
        if($preference){
            Cache::put($this->domain.'id_payment' ,$preference['response']['collector_id'] , 560000000);
            return response()->json(['url' => $preference['response']['init_point']] , 200);
        }else{
            return response()->json('error' , 401);
        }
    }

    public function transferPayment(Request $request){
        MP::sandbox_mode(TRUE);

        $plan = Plan::where('uuid' , $request->_X_PLAN)->first();
        if(!$plan){
            return response()->json($request->all());
        }
        if($request->months >= 3){
            $price = ($plan->price * $request->months) * 0.90;
        }else{
            $price = ($plan->price * $request->months);
        }
        if($request->months == 12){
            $price = ($plan->price * $request->months) * 0.80;
        }
        $preferenceData = [
            'items' => [
                [
                    'id' => $plan->uuid,
                    'category_id' => 'phones',
                    'title' => $request->months.' meses del plan '.$plan->name,
                    'description' => $plan->description,
                    'picture_url' => '',
                    'quantity' => 1,
                    'currency_id' => 'USD',
                    'unit_price' => $price,
                ]
            ],
            "payment_methods" =>[
                "excluded_payment_types" => [
                    array( "id"=>"credit_card"), array("id"=>"ticket"), array("id"=>"atm")
                ]
            ],
            "payer" => [
                "name" => Auth::client()->get()->name,
                "username" => Auth::client()->get()->last_name,
                "email" => $request->get('country').'-'.Auth::client()->get()->email,
            ],
            "back_urls" => [
                "success" => url('admin/account/checkout/finish/'),
                "failure" => url('admin/account/checkout/finish/'),
                "pending" => url('admin/account/checkout/finish/')
            ],
            "auto_return" =>  "approved",
            "external_reference" => "Reference_".Uuid::generate(4),
        ];

        $preference = MP::create_preference($preferenceData);
        Cache::put($this->domain.'_name_plan_payment' , $plan->id , 560000000);
        Cache::put($this->domain.'_month_plan' , $request->months, 560000000);
        if($preference){
            return response()->json(['url' => $preference['response']['init_point'] ] , 200);
        }else{
            return response()->json('error' , 401);
        }
    }
    public function mercadopago(Request $request){
        $status = $request->collection_status;
        if($status == 'pending'){
            $this->registerPaymentMercadoPago($request->all());
            return view('admin.account.payment-plan')
                ->with('plan',$this->plan)
                ->with('payment', $this->subscription->lastPayment());
                //->with('subscription', $this->subscription);
        }
        if($status == 'approved'){
            $this->registerPaymentMercadoPago($request);
            return redirect()->to()->with('message' ,['type' => 'success' , 'message' => ' Tu pago  fue acreditado.']);
        }
        if($status == 'in_process'){
            $this->registerPaymentMercadoPago($request);
            return redirect()->to()->with('message' ,['type' => 'success' , 'message' => ' Tu pago  fue acreditado.']);
        }
        if($status == 'rejected'){
            $this->registerPaymentMercadoPago($request);
            return redirect()->to()->with('message' ,['type' => 'success' , 'message' => ' Tu pago  fue acreditado.']);
        }
        if($status == null){
            return view('admin.account.payment-plan')
                ->with('message' ,['type' => 'warning' , 'message' => ' Tu pago a?n no fue acreditado.'])
                ->with('plan',$this->plan)
                ->with('payment', $this->payment)
                ->with('subscription', $this->subscription);
        }
    }


    public function regenerate(Request $request){
        MP::sandbox_mode(TRUE);
        $payment = Payment::where('uuid' , '=' ,$request->get('payment'))->first();
        $months = Cache::get($this->domain.'_month_plan');
        if($months >= 3){
            $price = ($payment->plan->price * $months) * 0.90;
        }else{
            $price = ($payment->plan->price * $months);
        }
        if($months == 12){
            $price = ($payment->plan->price * $months ) * 0.80;
        }
        ($request->get('method') == 'ticket') ? $excluded = 'bank_transfer' : $excluded = 'ticket';
        $preferenceData = [

            'items' => [
                [
                    'id' => $payment->plan->uuid,
                    'category_id' => 'plans',
                    'title' => $months.' meses del plan '.$payment->plan->name,
                    'description' => $payment->plan->description,
                    'picture_url' => '',
                    'quantity' => 1,
                    'currency_id' => 'USD',
                    'unit_price' => $price,
                ]
            ],
            "payment_methods" =>[
                "excluded_payment_types" => [
                    array( "id"=>"credit_card"), array("id"=>$excluded), array("id"=>"atm")
                ]
            ],
            "payer" => [
                "name" => Auth::client()->get()->name,
                "username" => Auth::client()->get()->last_name,
                "email" => $request->get('country').'-'.Auth::client()->get()->email,
            ],
            "back_urls" => [
                "success" => url('admin/account/checkout/finish/'),
                "failure" => url('admin/account/checkout/finish/'),
                "pending" => url('admin/account/checkout/finish/')
            ],
            "auto_return" =>  "approved",
        ];

        $preference = MP::create_preference($preferenceData);
        if($preference){
            return response()->json(['url' => $preference['response']['init_point'] ] , 200);
        }else{
            return response()->json('error' , 401);
        }
    }

    public function registerPaymentMercadoPago($request){
        if($request['collection_status'] == 'pending'){
            if($this->auth->isSubscriber()){
                $subscription = new Subscription(['status' => 'active' , 'plan_id' => $this->subscription->plan_id ]);
                $this->auth->subscriptions()->save($subscription);
            }else{
                $this->subscription->pendingPayments();
                $payment = new Payment(['payment_getaway' => $request['payment_type'] ,
                    'collection_id' =>  Cache::get($this->domain.'id_payment'),
                    'plan_id' => $this->subscription->plan_id ]);
                $this->subscription->payments()->save($payment);
                Cache::forget($this->domain.'id_payment');
            }
        }
    }
}
