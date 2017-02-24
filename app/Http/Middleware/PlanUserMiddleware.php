<?php

namespace Tendaz\Http\Middleware;

use Closure;

class PlanUserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next , ...$plans)
    {
        if (count($plans) > 0 && ! $request->shop->hasAnyPlan($plans)  ) {
            
            return redirect()->to('/admin')
                ->with('message' , ['type' => 'info' , 'message' => 'Compra un plan mas avanzado para acceder a esta opcion.']);
            
        }

        return $next($request);
    }
}
