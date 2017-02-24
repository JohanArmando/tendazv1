<?php
/**
 * Created by PhpStorm.
 * User: johins
 * Date: 27/10/16
 * Time: 10:24 AM
 */

namespace Tendaz\Transformers;


use League\Fractal\TransformerAbstract;
use Tendaz\Models\Products\Variant;

class VariantTransformer extends TransformerAbstract
{
    /**
     * List of resources to automatically include
     *
     * @var array
     */
    protected $defaultIncludes = [
        'images' 
    ];

    /**
     * List of resources possible to include
     *
     * @var array
     */

    protected $availableIncludes = [
        'images' , 'values'
    ];

    public function transform(Variant $variant)
    {
        return [
            'id'                => $variant->uuid,
            'name'              => $variant->product->name,
            'price'             => (int) $variant->price,
            'promotion_price'   => (int) $variant->promotional_price,
            'weight'            =>  $variant->weight,
            'stock'             =>  $variant->stock === 0 ? 'none' : $variant->stock,
            'sku'               =>  $variant->sku,
        ];
    }

    /**
     * @param Variant $product
     * @return \League\Fractal\Resource\Collection
     */
    public function includeImages(Variant $variant){
        $images = $variant->images;
        return $this->collection($images, new  ImageTransformer());
    }
}