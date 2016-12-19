<?php

namespace Tendaz\Http\Middleware;

use Closure;
use Tendaz\Models\Domain\Domain;
use Tendaz\Models\Store\Shop;
use Illuminate\Auth\AuthenticationException;

class customApiMiddleware
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
        if($request->wantsJson())
        {
            if($request->header('Accept') != 'application/json'){
                throw new AuthenticationException('Not application');
            }

            if(!Shop::where('id' , $request->client_id)->where('uuid' , $request->client_secret)->exists()){
                throw new AuthenticationException('Unauthenticated.');
            }

            $request->shop = Shop::where('id' , $request->client_id)->where('uuid' , $request->client_secret)->first();
            Domain::$SHOP_ID = $request->shop->id;
            return $next($request);
        }
        return $next($request);
    }
}
