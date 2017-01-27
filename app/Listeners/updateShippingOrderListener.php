<?php

namespace Tendaz\Listeners;

use Tendaz\Events\applyCouponToCartEvent;
use Tendaz\Events\updateShippingOrderEvent;

class updateShippingOrderListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  updateShippingOrderEvent  $event
     * @return void
     */
    public function handle(updateShippingOrderEvent $event)
    {
        $event->order->total_shipping = $event->cost;
        $event->order->total =   $event->order->total_products + $event->order->total_shipping;
        if ($event->bool) {
            $event->total_discount = 0;
            $event->order->cart->coupon_id = null;
            $event->order->cart->save();
        }

        $event->order->save();
        
        if ($event->order->cart->coupon){
            event(new applyCouponToCartEvent($event->order , $event->order->cart->coupon));
        }
        
    }
}
