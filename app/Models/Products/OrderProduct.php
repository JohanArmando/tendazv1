<?php

namespace Tendaz\Models\Products;

use Illuminate\Database\Eloquent\Model;
use Tendaz\Models\Order\Order;

class OrderProduct extends Model
{
    protected $table = 'order_item';

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
