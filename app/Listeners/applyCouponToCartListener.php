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
        switch ($event->coupon->type){
            case "percentage":
                $event->order->total_discount = ($event->coupon->value * $event->order->total_products) / 100;
                $event->order->total =  ($event->order->total_products + $event->order->total_shipping) - $event->order->total_discount;
                $event->order->save();
                break;
        }
    }
}
