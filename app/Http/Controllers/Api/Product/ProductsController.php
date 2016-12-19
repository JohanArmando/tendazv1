<?php

namespace Tendaz\Http\Controllers\Api\Product;

use Illuminate\Http\Request;
use League\Fractal\Pagination\IlluminatePaginatorAdapter;
use League\Fractal\Serializer\ArraySerializer;
use Tendaz\Http\Controllers\Controller;
use Tendaz\Models\Products\Product;
use Tendaz\Transformers\ProductTransformer;

class ProductsController extends Controller
{
    public function index(Request $request)
    {
        $collection = $request->collection;
        $resource = Product::byCollection($collection);
        return  fractal()
            ->collection($resource, new ProductTransformer())
            ->serializeWith(new ArraySerializer())
            ->withResourceName('products')
            ->toJson();
    }

    public function show($product)
    {
        $product = Product::bySlug($product);
        $variant = $product->variants()->first();
        return ['product' =>  fractal()
            ->item($variant, new ProductTransformer())
            ->serializeWith(new ArraySerializer()) ,
            'values' => $product->options->get()->toArray()];
    }

    public function all(Request $request)
    {
        $resource = Product::orderBy('id' , 'DESC')->get();
        return  fractal()
            ->collection($resource, new ProductTransformer())
            ->serializeWith(new ArraySerializer())
            ->withResourceName('products')
            ->toJson();
    }
}
