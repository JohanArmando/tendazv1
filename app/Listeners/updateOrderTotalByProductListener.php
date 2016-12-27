<?php

namespace Tendaz\Listeners;

use Tendaz\Events\updateOrderTotalByProductEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

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
        $event->order->total_shipping = 0;
        $event->order->total = $event->order->total_products + $event->order->total_shipping;
        $event->order->save();
    }
}
