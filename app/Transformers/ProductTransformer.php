<?php
/**
 * Created by PhpStorm.
 * User: johins
 * Date: 27/10/16
 * Time: 09:41 AM
 */

namespace Tendaz\Transformers;

use Tendaz\Models\Products\Variant;
use League\Fractal\TransformerAbstract;

class ProductTransformer extends TransformerAbstract
{
    protected $defaultIncludes = [
        'images' , 'values' , 'variants'
    ];


    public function transform(Variant $variant)
    {

        return [
            '_id'                => $variant->uuid,
            'product_id'         => $variant->product->uuid,
            'active'             => $variant->active,
            'categories'         => $variant->product ? $this->parse($variant->product->categories) : [],
            'name'               => $variant->product->name,
            'price'              => $variant->price,
            'slug'               => $variant->product->slug,
            'special_price'      => $variant->product->collection->promotion ? $variant->promotional_price : null,
            'stock'              => $variant->stock,
            'sku'                => $variant->sku,
            'visible'            => $variant->product->publish,
            'quantity'           => $variant->pivot  ? $variant->pivot->quantity : null,
            'description'        => $variant->product->description
        ];
    }

    public function parse($categories)
    {
        $data = [];
        foreach ($categories as $category){
            array_push($data , [
                '_id' => $category->uuid,
                'name' => $category->name
            ]);
        }
        return $data;
    }


    public function includeValues(Variant $variant){
        $values = $variant->values;
        return $this->collection($values, new  OptionValueTransformer());
    }

    public function includeImages(Variant $variant){
        $images = $variant->product->images;
        return $this->collection($images, new  ImageTransformer());
    }

    public function includeVariants(Variant $variant){
        $variants = $variant->product->variants;
        return $this->collection($variants, new  VariantTransformer());
    }
}