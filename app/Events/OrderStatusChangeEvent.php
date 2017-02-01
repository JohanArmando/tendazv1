<?php

namespace Tendaz\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Tendaz\Models\Order\Order;

class OrderStatusChangeEvent
{
    use InteractsWithSockets, SerializesModels;

    public $status;
    public $order;
    
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Order $order , $status)
    {
        $this->order = $order;
        $this->status = $status;
    }

}
