<?php

namespace Tendaz\Models\Payment_method;

use Illuminate\Database\Eloquent\Model;
use Tendaz\Traits\UuidAndShopTrait;
use Tendaz\Traits\WhereShopTrait;

class PaymentValue extends Model
{
    use WhereShopTrait , UuidAndShopTrait;

    protected $table = 'payment_values';

    public function getRouteKeyName()
    {
        return 'uuid';
    }

    public function paymentMethod()
    {
        return $this->belongsTo(PaymentMethod::class );
    }

    public function updateOrCreate(array $attributes, array $values = [])
    {
        $instance = $this->firstOrNew($attributes);

        $instance->fill($values);

        $instance->save();

        return $instance;
    }
    
}
