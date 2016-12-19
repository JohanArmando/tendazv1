<?php

namespace  Tendaz\Models\Subscription;

use Illuminate\Database\Eloquent\Model;
use Webpatser\Uuid\Uuid;

class Subscription extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'uuid', 'amount', 'state', 'start_at', 'end_at', 'trial_at'
    ];

}
