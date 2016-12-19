<?php

namespace Tendaz\Listeners;

use Tendaz\Events\updateShippingOrderEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

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
        $event->order->total_shipping = $event->method->cost;
        $event->order->total =   $event->order->total_products + $event->order->total_shipping;
        $event->order->save();
    }
}
