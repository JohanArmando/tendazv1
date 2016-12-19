<?php

namespace Tendaz\Models\Payment_method;

use Illuminate\Database\Eloquent\Model;
use Tendaz\Traits\WhereShopTrait;

class PaymentValue extends Model
{
    use WhereShopTrait;

    protected $table = 'payment_values';

    public function getRouteKeyName()
    {
        return 'uuid';
    }

    public function paymentMethod()
    {
        return $this->belongsTo(PaymentMethod::class );
    }
}
