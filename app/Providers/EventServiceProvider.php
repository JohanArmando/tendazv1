<?php

namespace Tendaz\Providers;

use Illuminate\Auth\Events\Login;
use Tendaz\Events\applyCouponToCartEvent;
use Tendaz\Events\OrderStatusChangeEvent;
use Tendaz\Events\updateOrderTotalByProductEvent;
use Tendaz\Events\updateShippingOrderEvent;
use Tendaz\Listeners\applyCouponToCartListener;
use Tendaz\Listeners\OrderStatusChangeListener;
use Tendaz\Listeners\UpdateCountOnlogin;
use Tendaz\Listeners\UpdateLastIpOnlogin;
use Tendaz\Listeners\UpdateLastLoginOnLogin;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Tendaz\Listeners\updateOrderTotalByProductListener;
use Tendaz\Listeners\updateShippingOrderListener;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Login::class => [
            UpdateLastLoginOnLogin::class,
            UpdateLastIpOnlogin::class,
            UpdateCountOnlogin::class
        ],

        updateOrderTotalByProductEvent::class =>[
            updateOrderTotalByProductListener::class
        ],
        updateShippingOrderEvent::class => [
            updateShippingOrderListener::class
        ],
        applyCouponToCartEvent::class => [
            applyCouponToCartListener::class
        ],
        OrderStatusChangeEvent::class => [
            OrderStatusChangeListener::class
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

            
    }
}
