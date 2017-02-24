<?php

namespace Tendaz\Policies;

use Tendaz\Models\Store\Shop;
use Tendaz\Models\Products\Product;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProductPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the users can view the product.
     *
     * @param  \Tendaz\Models\Store\Shop  $shop
     * @param  \Tendaz\Models\Products\Product  $product
     * @return mixed
     */
    public function view(Shop $shop, Product $product)
    {
        //
    }

    /**
     * Determine whether the users can create products.
     *
     * @param  \Tendaz\Models\Store\Shop  $shop
     * @return mixed
     */
    public function create(Shop $shop)
    {
        //
    }

    /**
     * Determine whether the users can update the product.
     *
     * @param  \Tendaz\Models\Store\Shop  $shop
     * @param  \Tendaz\Models\Products\Product  $product
     * @return mixed
     */
    public function update(Shop $shop, Product $product)
    {
        //
    }

    /**
     * Determine whether the users can delete the product.
     *
     * @param  \Tendaz\Models\Store\Shop  $shop
     * @param  \Tendaz\Models\Products\Product  $product
     * @return mixed
     */
    public function delete(Shop $shop, Product $product)
    {
        //
    }
}
