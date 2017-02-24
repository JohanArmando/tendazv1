<?php

namespace Tendaz\Models\Payment_method;

use Illuminate\Database\Eloquent\Model;
use Tendaz\Models\Domain\Domain;

class PaymentMethod extends Model
{
    protected $table = 'payment_methods';

    protected $fillable = ['name' , 'path' , 'cost_by_trans_deb' , 'cost_by_trans_cre' , 'days'];
    
    public function payment_value()
    {
        return $this->hasMany(PaymentValue::class)->where('shop_id', Domain::ShopByDomain()->id);
    }
}
