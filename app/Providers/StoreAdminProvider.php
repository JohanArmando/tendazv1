<?php

namespace Tendaz\Providers;

use Tendaz\Composers\StoreComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class StoreAdminProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(['admin.*' , 'themes.*' , 'layouts.admin' , 'checkout.*'] , StoreComposer::class);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
