<?php

namespace Tendaz\Providers;

use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
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
        
        Carbon::setLocale(config('app.locale'));
        

        Validator::extend('hash_check', function($attribute, $value, $parameters, $validator) {
            return Hash::check($value, $parameters[0]);
        });
        
        Validator::extend('sameData', function($attribute, $value, $parameters, $validator) {

            return ! ($value == $parameters[0]);

        });

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
