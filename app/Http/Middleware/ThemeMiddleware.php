<?php

namespace Tendaz\Http\Middleware;

use Closure;
use Tendaz\Models\Domain\Domain;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cache;
use igaster\laravelTheme\Facades\Theme;

class ThemeMiddleware
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
        
        $domain = $request->getHost();
        $theme = Cache::get("$domain._theme_current");
        if(!$theme){
            $theme = $request->shop->template->name;
            if($theme === null){
                return redirect($this->ssl.$this->domain->getDomain());
            }
            foreach ($request->shop->domains as $domain){
                Cache::forever("$domain->name._theme_current" , $theme);   
            }
        }
        if(Theme::exists($theme))
            Theme::set($theme);
        else
            Theme::set('default');
        return $next($request);
    }
}
