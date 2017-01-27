<?php

namespace Tendaz\Http\Middleware;

use Closure;
use Tendaz\Models\Subscription\Plan;

class SubscriptionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (isset($request->route()->getAction()['notMiddleware']) && $request->route()->getAction()['notMiddleware'] == 'subscription')
            return $next($request);
        if(!$request->shop->subscription()){
            $request->shop->makeSubscription(Plan::first());
        }
        if ($request->shop->subscription()->subscribed() || $request->shop->subscription()->onTrial() || $request->shop->subscription()->onGracePeriod())
            return $next($request);

        return redirect()->to('admin/account/checkout/start?ref=from_payment_bottom_bar');
    }
}
