<?php

namespace Tendaz\Models\Payment_method;

use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    protected $table = 'payment_methods';

    protected $fillable = ['name' , 'path' , 'cost_by_trans_deb' , 'cost_by_trans_cre' , 'days'];
}
