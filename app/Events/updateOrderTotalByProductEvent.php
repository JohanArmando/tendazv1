<?php

namespace Tendaz\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Tendaz\Models\Cart\Cart;
use Tendaz\Models\Order\Order;

class updateOrderTotalByProductEvent
{
    use InteractsWithSockets, SerializesModels;

    public $order;
    public $cart;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Order $order , Cart $cart)
    {
        $this->order = $order;
        $this->cart = $cart;
    }

}
