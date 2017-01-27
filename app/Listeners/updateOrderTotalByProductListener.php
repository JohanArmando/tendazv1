<?php

namespace Tendaz\Listeners;

use Tendaz\Events\applyCouponToCartEvent;
use Tendaz\Events\updateOrderTotalByProductEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Tendaz\Models\Shipping\ShippingMethod;

class updateOrderTotalByProductListener
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
     * @param  updateOrderTotalByProductEvent  $event
     * @return void
     */
    public function handle($event)
    {

        $event->order->total_products = $event->cart->totalProducts();
        $event->order->total = $event->order->total_products + $event->order->total_shipping;
        $event->order->save();
        
        ShippingMethod::OptionsByCart($event->cart);
    
        if ($event->order->cart->coupon){
            event(new applyCouponToCartEvent($event->order , $event->order->cart->coupon));
        }
    }
}
