<?php

namespace Tendaz\Http\Controllers\Admin\Account;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Tendaz\Http\Controllers\Controller;
use Tendaz\Models\Subscription\Plan;

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
