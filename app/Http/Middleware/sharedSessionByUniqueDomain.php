<?php

namespace Tendaz\Http\Middleware;

use Closure;

class sharedSessionByUniqueDomain
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
        $domain = $request->getHost();
        if (auth('admins')->user()->shop->domainMain->first()->name == $domain)
            return $next($request);
        else
            return redirect(env('APP_URL'));
    }
}
