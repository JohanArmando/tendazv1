<?php

namespace Tendaz\Providers;

use Tendaz\Models\Customer;
use Webpatser\Uuid\Uuid;
use Tendaz\Models\Cart\Cart;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Cart::created(function ($cart){
            $cart->order()->create([
                'order_status' => 1,
                'uuid'         =>  Uuid::generate(4)->string,
                'shop_id'      => $cart->shop_id,
                'customer_id'  => $cart->customer ? $cart->customer->id : null
            ]);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
