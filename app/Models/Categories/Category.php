<?php

namespace Tendaz\Models\Categories;

use Tendaz\Models\Products\Product;
use Baum\Node;
use Illuminate\Database\Eloquent\Model;
use Tendaz\Traits\UuidAndShopTrait;
use Tendaz\Traits\WhereShopTrait;

class Category extends Node
{
    use UuidAndShopTrait , WhereShopTrait;

    protected $table = "categories";
    protected $fillable = ['name','title','description','slug' , 'uuid','blacklist'];

    // 'parent_id' column name
    protected $parentColumn = 'parent_id';

    // 'lft' column name
    protected $leftColumn = 'lft';

    // 'rgt' column name
    protected $rightColumn = 'rgt';

    // 'depth' column name
    protected $depthColumn = 'depth';

    // guard attributes from mass-assignment
    protected $guarded = array( 'parent_id', 'lft', 'rgt', 'depth');

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function products(){
        return $this->belongsToMany(Product::class , 'category_product');
    }
    
    public function scopeWhereInCategoryId($q , Model $product)
    {
        return $q->whereIn('categories.id' ,    $product->categories->pluck('id')->toArray());
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

}
