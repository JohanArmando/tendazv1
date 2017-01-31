<?php

namespace Tendaz\Models\Order;

use Illuminate\Database\Eloquent\Model;

class OrderHistory extends Model
{
    protected $table = 'order_history';
    protected $fillable = ['order_status' ,'date' , 'uuid'];
}
