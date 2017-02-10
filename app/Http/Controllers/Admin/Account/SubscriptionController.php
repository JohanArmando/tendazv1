<?php

namespace Tendaz\Http\Controllers\Admin\Account;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;
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
        $position = Location::get($request->ip());

        $plan = Plan::whereUuid($request->get('uuid'));

        if (!$plan)
            abort(404);
        

        if ($request->shop->subscription()->onTrial()) {
            $request->shop
                ->updateSubscription(Carbon::today(), Carbon::today()->addMonths($plan->getIntervalInMonthly()))
                ->createPayment($request->token , $position)
                ->skipTrial();
        }else {
            $request->shop
                ->newSubscription( $plan, Carbon::today(), Carbon::today()->addMonths( $plan->getIntervalInMonthly() ) )
                ->createPayment($request->token , $position)
                ->skipTrial();
        }

        cache_subdomain($subdomain);

        return redirect()->to('/admin')
            ->with('message' , ['type' => 'info' , 'message' => 'Tu subscripcion ha cambiado']);
    }
}
