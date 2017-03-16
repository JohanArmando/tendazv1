<?php

namespace Tendaz\Http\Controllers\Admin\Account;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;
use Tendaz\Api\Twocheckout;
use Tendaz\Models\Subscription\Plan;
use Tendaz\Models\Subscription\Subscription;
use Tendaz\Http\Controllers\Controller;

class SubscriptionController extends Controller
{
    public function finish(Request $request)
    {
        $plan = $request->shop->subscription()->plan;
        if ($plan->plan == null) {
            return redirect()->to('/admin/account/plans')
                ->with('message' , ['type' => 'info' , 'message' => 'Debes seleccionar un plan antes de poder pagarlo']);
        }
        $subscription = Subscription::find(Auth('admins')->user()->shop->subscription_id);
        if ($subscription->recurrent == 1) {
          return redirect()->to('/admin/account/plans')
              ->with('message' , ['type' => 'info' , 'message' => 'Ya estas suscripto a un plan, cancela la subscription para optar por otra']);
        }
        return view('admin.account.payment-plan' , ['plan' => $plan]);
    }

    public function start(Request $request)
    {
        if ($request->has('plan')){
            $plan = Plan::whereUuid($request->get('plan'));
        }else{
            $plan = Plan::find(4);
        }
        if (!$plan)
            abort(404);

        return view('admin.account.payment-plan' , ['plan' => $plan]);
    }

    public function doSubscription($subdomain , Request $request)
    {
        //return $request->get('token');
        //return $request->all();
        $position = Location::get($request->ip());
        //dd($position);
        $privateKey = env('PRIVATE_KEY_TWO');
        $resellerId = env('SELLER_ID_TWO');
        Twocheckout::privateKey($privateKey);
        Twocheckout::sellerId($resellerId);
        Twocheckout::verifySSL(false);

        Twocheckout::sandbox(env('SANBOX_TWO',false));
        Plan::whereUuid($request->get('uuid'));
        $plan = Plan::whereUuid($request->get('uuid'));

        if(Auth('admins')->user()->phone == null){$phone = '+68 523 523 63';}else{$phone= Auth('admins')->user()->phone;}

        $shop = Auth('admins')->user()->shop;


        $data2 = [
            "sellerId" => env('SELLER_ID_TWO'),
            "merchantOrderId" => "123",
            "token" => $request->get('token'),
            "currency" => "USD",
            "lineItems" => [
                [
                    "type" => 'product',
                    "price" => $plan->getTotalPriceWithDiscount(),
                    "productId" => $plan->uuid,
                    "name" => $plan->name. " plan ". $plan->plan->name,
                    "quantity" => "1",
                    "tangible" => "N",
                    "recurrence" => $plan->getIntervalInMonthly(). " Month",
                    "duration" => 'Forever',
                    "description" => $plan->description
                ]
            ],
            "billingAddr" => [
                "name" => $request->name,
                "addrLine1" => $request->addrLine1,
                "city" => $request->city,
                "state" =>  $request->state,
                "zipCode" => $request->zipCode,
                "country" =>  $request->country,
                "email" => $request->email,
                "phoneNumber" =>  $shop->user->phone
            ]
        ];
        //return $data2;


        //return $data;
        $sale_id = null;
        if(Auth('admins')->user()->phone == null){$phone = 'Sin Numero';}else{$phone= Auth('admins')->user()->phone;}
        try {
            $charge = Twocheckout\Twocheckout_Charge::auth($data2);
            $sale_id = $charge['response']['orderNumber'];
            //return $sale_id;

        } catch (Twocheckout_Error $e) {

            $this->assertEquals('Unauthorized', $e->getMessage());
        }


        $plan = Plan::whereUuid($request->get('uuid'));

        if (!$plan)
            abort(404);

        $plan->price = $plan->getTotalPriceWithDiscount();

        //return ['inicio'=>Carbon::today()->addMonths(1), 'final'=> Carbon::today()->addMonths($plan->getIntervalInMonthly())];
        if (!$request->shop->subscription()->onTrial()) {
            $request->shop
                ->newSubscription( $plan, Carbon::today(), Carbon::today()->addMonths( $plan->getIntervalInMonthly()))
                ->skipTrial()->onRecurrent($sale_id);
        }else {
            $request->shop
                ->newSubscription( $plan, Carbon::today(), Carbon::today()->addMonths( $plan->getIntervalInMonthly()))
                ->skipTrial()->onRecurrent($sale_id);
        }


        cache_subdomain($subdomain);

        return redirect()->to('/admin')
            ->with('message' , ['type' => 'info' , 'message' => 'Tu subscripcion ha cambiado a el plan '.$plan->name]);
    }

    public function stopSubscription()
    {
       //9093734457789
      $Subscription = Subscription::find(Auth('admins')->user()->shop->subscription_id);
      Twocheckout::verifySSL(false);
      Twocheckout::sandbox(env('SANBOX_TWO',false));
      Twocheckout::username(env('USER_TWO'));
      Twocheckout::password(env('PASSWORD_TWO'));

      $args = array(
          'sale_id' => $Subscription->sale_id
      );
      try {
          $result = Twocheckout\Api\Twocheckout_Sale::stop($args);
      } catch (Twocheckout_Error $e) {
          $e->getMessage();
      }
      $Subscription->recurrent = 0;
      $Subscription->save();
      return redirect()->to('/admin')
          ->with('message' , ['type' => 'info' , 'message' => 'La subscripcion ha sido cancelada ']);
    }

    public function plans(Request $request)
    {
        if ($request->has('plan')){
            $plan = Plan::whereUuid($request->get('plan'));
        }else{
            $plan = Plan::find(4);
        }
        if (!$plan)
            abort(404);
        $plan = Plan::with('plan.periods')->find($plan->id);
        return $plan;

    }
}
