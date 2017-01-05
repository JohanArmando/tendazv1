<?php

namespace Tendaz\Models\Products;

use Carbon\Carbon;
use Tendaz\Models\Cart\CartProductPivot;
use Webpatser\Uuid\Uuid;
use Tendaz\Models\Images\Image;
use Tendaz\Models\Domain\Domain;
use Tendaz\Traits\WhereShopTrait;
use Illuminate\Support\Facades\DB;
use Tendaz\Traits\UuidAndShopTrait;
use Tendaz\Models\Categories\Category;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use WhereShopTrait ,UuidAndShopTrait;
    
    protected $shop;
    protected $appends = ['options'];
    
    protected $table = 'products';

    protected $fillable = [
        'name', 'slug', 'seo_title', 'seo_description', 'description', 'publish','provider_id', 
         'shop_id', 'uuid' , 'blacklist' , 'large' , 'height' , 'width' ,'dimension'
    ];

    protected $hidden = [
        'id' , 'created_at', 'updated_at'
    ];
    

    public function getRouteKeyName()
    {
        return 'uuid';
    }

    /**
     * Set the name attribute and automatically the slug
     *
     * @param string $name
     */
    

    public function setDescriptionAttribute($value)
    {
        if(!empty($value)){
            $this->attributes['description'] = ($value == 'no' || $value == 'No') ? '' : $value;
        }
    }

    public function setNameAttribute($name)
    {
        $this->attributes['name'] = $name;

        if(!$this->exists)
        {
            $this->setUniqueName($name, '');
        }
    }

    /**
     * Recursive routine to set a unique slug
     *
     * @param string $name
     * @param mixed $extra
     */
    public function setUniqueName($name, $extra)
    {
        $slug = str_slug($name . '-' . $extra);
        if (static::whereSlug($slug)->exists())
        {
            $this->setUniqueName($name, $extra + 1);
            return;
        }

        $this->attributes['slug'] = $slug;
    }

    public function setSlugAttribute($value)
    {
        if(!empty($value)){
            if(!$this->exists)
            {
                $this->setUniqueName($value, '');
            }
        }
    }

    public function getOptionsAttribute()
    {
        return $this->join('variants', 'products.id', '=', 'variants.product_id')
            ->join('option_value_variant', 'option_value_variant.variant_id', '=', 'variants.id')
            ->join('option_values', 'option_value_variant.option_value_id', '=', 'option_values.id')
            ->join('options', 'options.id', '=', 'option_values.option_id')
            ->select("options.name",DB::raw("(GROUP_CONCAT(DISTINCT option_values.name SEPARATOR ',')) as `values`"))
            ->groupBy('options.id');
    }

    public function getNewAttribute()
    {
        return Carbon::parse($this->created_at)->addDays(8)->isFuture();
    }
    
    
    
    public function getDescriptionAttribute()
    {
        return (!empty($this->attributes['description']) ? $this->attributes['description'] : 'No');
    
    }
    
    /**
     *
     * RELATHIOSHIP
     *
     */

    public function optionValueVariant()
    {
        return $this->hasManyThrough(OptionValueVariant::class , Variant::class);
    }

    public function variants()
    {
        return $this->hasMany(Variant::class);
    }

    public function orders()
    {
        return  $this->variants()->with('orders');
    }

    public function orderItems()
    {
        return  $this->hasManyThrough(OrderProduct::class ,Variant::class);
    }
    public function sumQuantity()
    {
        return $this->orderItems()->sum('quantity');
    }
    public function scopeTotalSell()
    {
        return  $this->join('variants' , 'variants.product_id' , '=' , 'products.id')
                       ->join('order_item' , 'order_item.variant_id' , 'variants.id')
                       ->select(DB::raw('sum(order_item.quantity) as total') , DB::raw("(GROUP_CONCAT(DISTINCT products.name SEPARATOR ',')) as `name`"))
                       ->groupBy('products.id')
                       ->orderBy('total' , 'DESC')
                       ->take('10')
                       ->get();
    }

    public function scopeTotalBilling()
    {
        return  $this->join('variants' , 'variants.product_id' , '=' , 'products.id')
                       ->join('order_item' , 'order_item.variant_id' , 'variants.id')
                       ->select(DB::raw('sum(price) as total , sum(order_item.quantity) AS count'),  DB::raw("(GROUP_CONCAT(DISTINCT products.name SEPARATOR ',')) as `name`"))
                       ->groupBy('products.id')
                       ->orderBy('total' , 'DESC')
                       ->orderBy('count' , 'DESC')
                       ->take('10')
                       ->get();
    }
    
    public static function countVariants()
    {
        return  static::withCount('orders')->orderBy('orders_count' , 'DESC')->take(10)->get();
    }

    public function variantsFull()
    {
        return $this->hasMany(Variant::class)->with('optionValue')->with('information');
    }
    
    public function information()
    {
        return $this->variants()->first()->information;
    }

    public function collection()
    {
        return $this->hasOne(Section::class);
    }

    public function images()
    {
        return $this->hasManyThrough(Image::class , Variant::class);
    }

    public function  categories()
    {
        return $this->belongsToMany(Category::class , 'category_product');
    }

    /**
     *
     * STATICS
     *
     */
    public static function byCollection($collection)
    {
        $products = [];
        switch ($collection){
            case 'new' :
                $products = Variant::whereHas('product')->lastest()->take(8);
                break;
            case 'promotion' :
                $products = Variant::whereHas('product' , function($product){
                    return $product->whereHas('collection', function($query) {
                        return $query->where('sections.promotion', 1);
                    });
                });
                break;
            case 'feature' :
                $products = Variant::whereHas('product' , function($product){
                    return $product->whereHas('collection', function($query) {
                        return $query->where('sections.primary', 1);
                    });
                });
                break;
            default:
                $products = Variant::whereHas('product')->where('created_at',  '>' , Carbon::now()->subDays(8));
                break;
        }
        return $products->groupBy('product_id')->limit(10)->orderBy('id' ,'DESC')->get();
    }

    public static function moreSeller()
    {
        return static::with('variants')->get();
    }
    public static function createValue($item, $option, $i)
    {
        if ($option->values()->where('name', $item['i18n']['es_AR']["option_value_$i"])->exists()) {
            $value = $option->values()->where('name', $item['i18n']['es_AR']["option_value_$i"])->first();
            return $value;
        } else {
            $value = $option->values()->create([
                'uuid' => Uuid::generate(4)->string,
                'name' => $item['i18n']['es_AR']["option_value_$i"]
            ]);
            return $value;
        }
    }

    public  static function byUuid($id)
    {
        Product::where('uuid' , $id);
    }

    public static function createWithVariant($array)
    {
        $request = (object) $array;
        $product = static::create((array) $request);
        $product->collection()->create([
            'uuid' => Uuid::generate(4)->string,
            'shipping_free' =>  isset($request->shipping_free),
            'promotion' =>  isset($request->promotion),
            'primary'   =>  isset($request->primary)
        ]);
        $sellable = self::addVariants($product, $request);
        self::addCategories($request, $product);
        return $sellable ? true : false;
    }
    //arreglar where shop
    
    private static function addVariants($product, $request)
    {
        foreach ($request->product['variants'] as $item) {
            $variant = $product->variants()->create($item);
            self::optionValuesByVariable($request, $item, $variant);
        }

        self::addImages($request, $product->variant());
        return $product->variant;
    }
    public function setPublishAttribute(value){

    }
    public static function productVisible()
    {
        return static::where('publish' , 1)->order();
    }

    public static function addImages($request, $variant)
    {
        foreach ($request->file as $file) {
            $variant->images()->create([
                'name' => $file
            ]);
        }
    }

    public static function addCategories($request, $product)
    {
        if(isset($request->category_id) && count($request->category_id) > 0) {
            foreach ($request->category_id as $category) {
                $product->categories()->attach($category);
            }
        }
    }


    public static function optionValuesByVariable($request, $item, $variant)
    {
        if (isset($item['i18n']['es_AR'])) {
            for ($i = 1; $i <= count($item['i18n']['es_AR']); $i++) {
                if (!empty($item['i18n']['es_AR']["option_value_$i"])) {
                    if (Option::where('name', $request->product['i18n']['es_AR']["option_name_$i"])->exists()) {
                        $option = Option::where('name', $request->product['i18n']['es_AR']["option_name_$i"])->first();
                        $value = self::createValue($item, $option, $i);
                    } else {
                        list($option, $value) = self::createOption($request, $item, $i);
                    }
                    $variant->optionValue()->attach($value->id , ['uuid' => Uuid::generate(4)->string]);
                }
                $variant->optionValue()->attach($value->id , ['uuid' => Uuid::generate(4)->string]);
            }
        }
    }


    public static function createOption($request, $item, $i)
    {
        $option = Option::create([
            'uuid' => Uuid::generate(4)->string,
            'name' => $request->product['i18n']['es_AR']["option_name_$i"],
        ]);
        $value = $option->values()->create([
            'uuid' => Uuid::generate(4)->string,
            'name' => $item['i18n']['es_AR']["option_value_$i"]
        ]);
        return array($option, $value);
    }

    public static function bySlug($slug)
    {
        return static::where('slug', $slug)->first();
    }

    public  function scopeWhereShop()
    {
        return static::where('shop_id', Domain::ShopByDomain()->id);
    }

    public static function filterByCategories($request)
    {
        $request = (object) $request;
        static::whereHas('categories' , function ($q) use ($request) {
            $q->whereIn('categories.id' , [70]);
        })->get();
    }

    public static function higherBilling()
    {
        return static::orders();
    }
    /**
     * @param $query
     * @return mixed
     */
    public function scopeByGroupsPromotion($query){
        return $query->whereSections('promotion')->orderBy('id' , 'DESC');

    } public function scopeByGroupsFeatures($query){
        return $query->whereSections('primary')->orderBy('id' , 'DESC');

    } public function scopeByGroupsNew($query){
        return $query->whereDay('created_at' , '<' , Carbon::now()->subDays(15))->orderBy('id' , 'DESC');

    }

    public function scopeWhereSections($query , $field){
        return $query->whereHas('sections' , function ($q) use ($field){
            $q->where($field , 1);
        });
    }
    public function scopebyCategory($query , $slug){
        return $query->whereHas('categories' , function ($q) use ($slug){
            $q->where('slug' , $slug);
        });
    }

    public function scopeVariant()
    {
        return $this->variants()->first();
    }

    public function scopeOrder($query , $column = 'id', $order = 'desc')
    {
        return $query->orderBy($column , $order);
    }

    public function scopeMainImage($query)
    {
        return $query->variant()->images->first() ? $query->variant()->images->first()->url : null;
    }

    public function stringCategories()
    {
        return implode(',' , $this->categories->pluck('name')->toArray());
    }

}
