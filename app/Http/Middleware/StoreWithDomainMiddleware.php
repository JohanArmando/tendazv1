<?php

namespace Tendaz\Http\Middleware;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\App;
use Tendaz\Models\Domain\Domain;
use Closure;


class StoreWithDomainMiddleware
{
    /**
     * StoreWithDomainMiddleware constructor.
     */
    public function __construct()
    {
        $this->domain = new Domain();
        $this->ssl = App::environment('local') ? 'http://' : 'https://';
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $subdomain = $request->route('subdomain');
        $domain = $request->getHost();
        $request->subdomain = $subdomain;
        if(Cache::has($subdomain.'_store')){
            $request->shop =  Cache::get($subdomain.'_store');
            if (!$request->shop->subscription_id)
                Cache::forget($subdomain.'_store');
            return $next($request);
        }else{
            if (Domain::isDomainName($domain)){
                $domain = Domain::getShopByDomain($domain);
                $shop = $domain;
                $request->shop = $shop;
                Cache::forever($subdomain.'_store' , $request->shop);
                return $next($request);
            }else{
                return redirect($this->ssl.$this->domain->getDomain());
            }
        }
    }
}
