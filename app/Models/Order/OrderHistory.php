<?php

namespace Tendaz\Models\Order;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class OrderHistory extends Model
{
    protected $table = 'order_history';
    protected $fillable = ['order_status' ,'date' , 'uuid'];

    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])->format('H:m');
    }

    public function getOrderStatusAttribute()
    {
        return "marcó la orden como ".'"' . strtolower($this->attributes['order_status']).'".';
    }
}
