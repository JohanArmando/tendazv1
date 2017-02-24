<?php

namespace Tendaz\Models\Images;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Tendaz\Models\Domain\Domain;
use Tendaz\Models\Products\Variant;
use Tendaz\Traits\UuidAndShopTrait;

class Image extends Model
{
    use UuidAndShopTrait;

    protected $fillable = [
     'uuid' , 'name' , 'url' , 'variant_id'
    ];

    protected $folder = 'products';

    public function setNameAttribute($path){
        if(! empty($path)){
            $name = $path->getClientOriginalName();
            $this->attributes['name'] = $name;
            $this->attributes['url'] = url("images-$this->folder/".auth('admins')->user()->shop->id.'/'.$name);
            \Storage::disk($this->folder)->put(auth('admins')->user()->shop->id.'/'.$name, \File::get($path));
        }
    }
    public function Product(){
        return $this->belongsTo(Variant::class);
    }

}
