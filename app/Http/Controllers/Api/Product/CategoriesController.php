<?php

namespace Tendaz\Http\Controllers\Api\Product;

use Illuminate\Http\Request;
use Tendaz\Models\Categories\Category;
use Tendaz\Http\Controllers\Controller;
use Tendaz\Models\Products\Variant;
use Tendaz\Transformers\CategoryTransformer;
use Tendaz\Transformers\ProductTransformer;
use League\Fractal\Serializer\ArraySerializer;

class CategoriesController extends Controller
{
    public function tree()
    {
        return  fractal()
            ->collection(Category::get()->toHierarchy(), new CategoryTransformer())
            ->serializeWith(new ArraySerializer())
            ->withResourceName('categories')
            ->toJson();
    }

    public function show(Category $category = null,Request $request)
    {
        if($request->wantsJson()){
            if($category->id){
                $cateogories = $category->ancestorsAndSelf()->get();
                return response()->json(['ancestor' => $cateogories],200);
            }
        }
    }
    public function index(Category $category)
    {
        if ((! is_null($category))){
            $products = Variant::whereHas('product' , function($product) use ($category){
                return $product->whereHas('categories' , function ($query) use ($category) {
                    return $query->whereIn('categories.id' , [$category->id]);
                });
            })->groupBy('product_id')->get();
        }else{
            $products = Variant::groupBy('product_id')->get();
        }
        return  fractal()
            ->collection($products, new ProductTransformer())
            ->serializeWith(new ArraySerializer())
            ->withResourceName('products')
            ->toJson();
    }

}
