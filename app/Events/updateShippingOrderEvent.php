<?php

namespace Tendaz\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Tendaz\Models\Order\Order;
use Tendaz\Models\Shipping\ShippingMethod;

class updateShippingOrderEvent
{
    use InteractsWithSockets, SerializesModels;
    
    public $order;
    public $cost;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Order $order , $cost)
    {
        $this->order = $order;
        $this->cost = $cost;
    }
}
