<?php

namespace Tendaz\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Cookie;
use Tendaz\Models\Domain\Domain;
use Tendaz\url\DomainStore;

class BuildMiddleware
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
        if (Domain::isDomainName($domain)) {
            $store = Domain::getShopByDomain($domain)->store;
            if ($store->build) {
                return redirect()->to(url('/build'));
            }
        }
        return $next($request);
    }
}
