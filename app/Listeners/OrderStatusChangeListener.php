<?php

namespace Tendaz\Listeners;

use Jenssegers\Date\Date;
use Tendaz\Events\OrderStatusChangeEvent;
use Webpatser\Uuid\Uuid;

class OrderStatusChangeListener
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
     * @param  OrderStatusChangeEvent  $event
     * @return void
     */
    public function handle(OrderStatusChangeEvent $event)
    {
        $event->order->histories()->create([
            'uuid' => Uuid::generate(4)->string,
            'order_status' =>  $event->status,
            'date' => new Date()
        ]);
    }
}
