<?php

namespace Tendaz\Http\Controllers\Api\Product;

use Illuminate\Http\Request;
use League\Fractal\Pagination\IlluminatePaginatorAdapter;
use League\Fractal\Serializer\ArraySerializer;
use Tendaz\Http\Controllers\Controller;
use Tendaz\Models\Categories\Category;
use Tendaz\Models\Products\Product;
use Tendaz\Models\Products\Variant;
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
        $resources =  Variant::whereHas('product' , function ($q) use ($request) {
            $q->where('shop_id' , $request->shop->id);
        })->groupBy('product_id')->orderBy('id' ,'DESC')->get();

        //$paginator = $resource->paginate($request->get('per_page' , 10));

        return fractal()
            ->collection($resources, new ProductTransformer($request->get('values')))
            ->serializeWith(new ArraySerializer())
            ->parseIncludes($request->get('include'))
            ->parseExcludes($request->get('exclude'))
            ->withResourceName('products')
            //->paginateWith(new IlluminatePaginatorAdapter($paginator))
            ->toArray();
    }

    public function relations(Product $product)
    {
        $products = Variant::RelationProduct($product);
        return  fractal()->collection($products, new ProductTransformer());
    }
}
