<?php

namespace Tendaz\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Tendaz\Models\Coupon\Coupon;
use Tendaz\Models\Order\Order;

class applyCouponToCartEvent
{
    use InteractsWithSockets, SerializesModels;

    public $order;
    public $coupon;
    
    public function __construct(Order $order , Coupon $coupon)
    {
        $this->coupon = $coupon;
        $this->order = $order;
    }
}
