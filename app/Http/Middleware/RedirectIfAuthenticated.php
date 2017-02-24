<?php

namespace Tendaz\Http\Middleware;

use Tendaz\Models\Domain\Domain;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    const GUARD_CLIENT = 'web';
    const GUARD_ADMIN = 'admins';
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            switch ($guard){
                case RedirectIfAuthenticated::GUARD_CLIENT :
                    return redirect('/home');
                case RedirectIfAuthenticated::GUARD_ADMIN :
                    return redirect(Domain::DomainByUser().'/admin');
                default :
                    return redirect('/');
            }
        }
        return $next($request);
    }
}
