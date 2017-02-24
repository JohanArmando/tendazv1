<?php

namespace Tendaz\Models\Store;

use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    protected $fillable = [
        'uuid' , 'name' , 'directory' , 'path' , 'active' , 'products_per_page'
    ];
    
    public function shops(){
        return $this->hasMany(Shop::class);
    }
}
