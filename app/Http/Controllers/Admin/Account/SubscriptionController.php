<?php

namespace Tendaz\Http\Controllers\Admin\Account;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Tendaz\Api\Twocheckout;
use Tendaz\Models\Subscription\Plan;
use Tendaz\Http\Controllers\Controller;

class SubscriptionController extends Controller
{
    public function finish(Request $request)
    {
        $plan = $request->shop->subscription()->plan;
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
        Twocheckout::privateKey('701ABCC9-D4E0-4B77-877D-E6EEC389C6AE');
        Twocheckout::sellerId('203161976');

        try {
            $charge = Twocheckout\Twocheckout_Charge::auth(array(
                "sellerId" => "901248204",
                "merchantOrderId" => "123",
                "token" => 'MjFiYzIzYjAtYjE4YS00ZmI0LTg4YzYtNDIzMTBlMjc0MDlk',
                "currency" => 'USD',
                "total" => '10.00',
                "billingAddr" => array(
                    "name" => 'Testing Tester',
                    "addrLine1" => '123 Test St',
                    "city" => 'Columbus',
                    "state" => 'OH',
                    "zipCode" => '43123',
                    "country" => 'USA',
                    "email" => 'testingtester@2co.com',
                    "phoneNumber" => '555-555-5555'
                ),
                "shippingAddr" => array(
                    "name" => 'Testing Tester',
                    "addrLine1" => '123 Test St',
                    "city" => 'Columbus',
                    "state" => 'OH',
                    "zipCode" => '43123',
                    "country" => 'USA',
                    "email" => 'testingtester@2co.com',
                    "phoneNumber" => '555-555-5555'
                )
            ));
            dd($charge);
            $this->assertEquals('APPROVED', $charge['response']['responseCode']);
        } catch (Twocheckout_Error $e) {
            $this->assertEquals('Unauthorized', $e->getMessage());
        }

        $plan = Plan::whereUuid($request->get('uuid'));

        if (!$plan)
            abort(404);

        if ($request->shop->subscription()->onTrial()) {
            $request->shop->updateSubscription(null, Carbon::today(), Carbon::today()->addMonths($plan->getIntervalInMonthly()));
        }else {
            $request->shop->newSubscription( $plan, Carbon::today(), Carbon::today()->addMonths( $plan->getIntervalInMonthly() ) )->skipTrial();
        }

        cache_subdomain($subdomain);

        return redirect()->to('/admin')
            ->with('message' , ['type' => 'info' , 'message' => 'Tu subscripcion ha cambiado']);
    }
}
