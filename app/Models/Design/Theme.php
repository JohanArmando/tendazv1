<?php

namespace Tendaz\Models\Design;

use Tendaz\Models\Store\Shop;
use Illuminate\Database\Eloquent\Model;
class Theme extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'uuid', 'name', 'directory', 'path', 'active', 'products_per_page'];

}