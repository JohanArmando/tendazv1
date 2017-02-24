<?php

namespace Tendaz\Listeners;

use Tendaz\Events\applyCouponToCartEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class applyCouponToCartListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Handle the event.
     *
     * @param  applyCouponToCartEvent  $event
     * @return void
     */
    public function handle(applyCouponToCartEvent $event)
    {
        $event->coupon->applyCoupon($event->order);
    }
}
