<?php

namespace Tendaz\Models\Images;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Tendaz\Models\Domain\Domain;
use Tendaz\Models\Products\Variant;
use Tendaz\Traits\UuidAndShopTrait;
use Webpatser\Uuid\Uuid;


class Image extends Model
{
    use UuidAndShopTrait;

    protected $fillable = [
     'uuid' , 'name' , 'url' , 'variant_id'
    ];

    protected $folder = 'products';

    public function setNameAttribute($file){
        /*if(! empty($path)){
            $name = $path->getClientOriginalName();
            $this->attributes['name'] = $name;
            $this->attributes['url'] = url("images-$this->folder/".auth('admins')->user()->shop->id.'/'.$name);
            \Storage::disk($this->folder)->put(auth('admins')->user()->shop->id.'/'.$name, \File::get($path));
        }*/
        //get the base-64 from data
        $base64_str = substr($file, strpos($file, ",")+1);
        //decode base64 string
        $image = base64_decode($base64_str);
        $png_url = "image-".Uuid::generate(4)->string.".png";
        $path = public_path()."/images-products/".auth('admins')->user()->shop->id."/";
        \Storage::disk($this->folder)->makeDirectory(auth('admins')->user()->shop->id."/");
        file_put_contents($path.$png_url, $image);
        $this->attributes['name'] = $png_url;
        $this->attributes['url'] = url("images-$this->folder/".auth('admins')->user()->shop->id.'/'.$png_url);;

    }
    public function Product(){
        return $this->belongsTo(Variant::class);
    }

}
