<?php

namespace Tendaz\Http\Controllers\Admin;

use Excel;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation\Validator;
use Tendaz\Models\Images\Image;
use Tendaz\Models\Store\Shop;
use Webpatser\Uuid\Uuid;
use Illuminate\Http\Request;
use Tendaz\Models\Products\Option;
use Tendaz\Models\Order\Provider;
use Tendaz\Models\Products\Product;
use Tendaz\Models\Products\Variant;
use Tendaz\Models\Products\Section;
use Tendaz\Models\Categories\Category;
use Tendaz\Models\Categories\Categorypro;
use Tendaz\Http\Controllers\Controller;
use Tendaz\Jobs\DeleteImagesProductJob;
use Tendaz\Components\ProductListImport;
use Tendaz\Transformers\ProductTransformer;
use League\Fractal\Serializer\ArraySerializer;

class ProductsController extends Controller
{
    public function response($request)
    {
        $request = (object) $request;
        return  fractal()
                ->collection(Variant::orderBy('id' , 'desc')->whereHas('product')->with('product')->groupBy('product_id')
                ->get(), new ProductTransformer())
                ->serializeWith(new ArraySerializer())
                ->withResourceName('products')
                ->parseIncludes($request->get('include'))
                ->toJson();
    }

    public function index(Request $request)
    {
        if ($request->wantsJson()) {
            return $this->response($request);
        }
       return view('admin.product.index');
    }

    public function create(Request $request)
    {
        $categories = Category::pluck('name' , 'id')->toArray();
        $providers  =   Provider::where('shop_id',$request->shop->id)->get();
        // dd($providers);
        $options    = Option::get(['id' , 'name']);
        return view('admin.product.create',compact('categories' , 'options','providers'));
    }


    public function store(Request $request)
    {
        $this->validate($request , [
           'name' => 'required'
        ]);
        $product = Product::create([
            'name' => $request->name,
            'slug'=> $request->slug,
            'seo_title'=> $request->seo_title,
            'seo_description'=> $request->seo_description,
            'description'=> $request->description,
            'publish'=> 1,
            'provider_id'=> $request->provider_id,
            'large'=> $request->large,
            'height'=> $request->height,
            'width' => $request->width,
            'dimension'=> 1
        ]);
        $product->collection()->create([
            'uuid' => Uuid::generate(4)->string,
            'shipping_free' => isset($request->shipping_free),
            'promotion' => isset($request->promotion),
            'primary' => isset($request->primary)
        ]);
        if (isset($request->category_id) && count($request->category_id) > 0) {
            foreach ($request->category_id as $category) {
                $product->categories()->attach($category);
            }
        }
        $variant = $product->variants()->create([
            'sku' => $request->sku, 
            'price' => $request->price, 
            'promotional_price' => $request->promotional_price,
            'weight'=> $request->weight,
            'stock'=> $request->stock,
            'price_declared'=> $request->price_declared
        ]);
        if (isset($request->file) && count($request->file) > 0) {
            foreach ($request->file as $file) {
                $variant->images()->create([
                    'name' => $file
                ]);
            }
        }
        if (isset($request->values)) {
            $values = json_decode($request->values);
            foreach ($values as $value) {
                $variant->optionValue()->attach($value);
            }
        }
        
        $product = $product->fresh();
        return response()->json($product, 200);
    }

    public function storeAdvanced(Request $request)
    {
        //return $request->variant['price'];
        $this->validate($request , [
           'name' => 'required'
        ]);
        $product = Product::create([
            'name' => $request->name,
            'slug'=> $request->slug,
            'seo_title'=> $request->seo_title,
            'seo_description'=> $request->seo_description,
            'description'=> $request->description,
            'publish'=> 1,
            'provider_id'=> $request->provider_id,
            'large'=> $request->large,
            'height'=> $request->height,
            'width' => $request->width,
            'dimension'=> 1
        ]);
        $product->collection()->create([
            'uuid' => Uuid::generate(4)->string,
            'shipping_free' => isset($request->shipping_free),
            'promotion' => isset($request->promotion),
            'primary' => isset($request->primary)
        ]);
        if (isset($request->category_id) && count($request->category_id) > 0) {
            foreach ($request->category_id as $category) {
                $product->categories()->attach($category);
            }
        }
        $variant = $product->variants()->create([
            'price' => $request->variant['price'], 
            'stock'=> $request->variant['stock'],
            'weight'=> $request->variant['weight']
        ]);
        if (isset($request->file) && count($request->file) > 0) {
            foreach ($request->file as $file) {
                $variant->images()->create([
                    'name' => $file
                ]);
            }
        }
        if (isset($request->values)) {
            $values = json_decode($request->values);
            foreach ($values as $value) {
                $variant->optionValue()->attach($value);
            }
        }
        
        $product = $product->fresh();
        return response()->json(Product::with(['collection','variants.values'])->find($product->id), 200);
    }

    public function edit($subdomain ,Product $product)
    {
        $categories =   Category::pluck('name' , 'id');
        $options    =   Option::get(['id' , 'name']);
        return view('admin.product.edit',compact('product' , 'categories' , 'options','providers'));
    }

    public function update($subdomain, Product $product , Request $request)
    {
        if ($request->wantsJson()){
            $product->update($request->all());
            return $this->response($request);
        }
    }
    
    public function updateVariant($subdomain, Variant $variant , Request $request)
    {
        if ($request->wantsJson()){
           $variant->update($request->all());
            return fractal()->item($variant , new ProductTransformer());
        }
    }


    public function destroy($subdomain , Product $product , Request $request)
    {
        if($request->wantsJson()){
            $this->dispatch(new DeleteImagesProductJob($product));
            $product->delete();
            return http_response_code(202);
        }
    }

    public function images($subdomain  , Product $product ,Request $request)
    {
        if($request->ajax()){
            if($product)
                return response()->json($product->variant()->images);
            else
                return http_response_code(404);
        }
    }

    public function export($subdomain , Request $request){

        if(!$request->categoria){
            $products = Product::all();
        }else{
            $products = Product::whereHas('categories' , function ($q) use ($request) {
                $q->whereIn('categories.id' , [$request->categoria]);
            })->get();
        }
        Excel::create("$subdomain.products_export", function($excel) use($products) {
            $excel->setTitle('Listado de productos');
            $excel->sheet('Sheetname', function($sheet) use($products) {;

                $rows = array();
                foreach ($products as $product) {
                    foreach ($product->variants as $variant){
                        $rows[] = array(
                            'url_key'                   => $product->slug,
                            'Nombre'                    => $product->name,
                            'Categorias'                => $product->StringCategories(),
                            'Precio'                    => $variant->price,
                            'Precio Promocional'        => $variant->promotional_price,
                            'Stock'                     => $variant->stock,
                            'Peso'                      => $variant->weight,
                            'Sku'                       => $variant->sku,
                            'Mostrar En Tienda'         => $product->showInStore,
                            'Descripcion'               => $product->description,
                            'Nombre de propiedad 1'     => $variant->optionOne,
                            'Valor de la propiedad 1'   => $variant->valueOne,
                            'Nombre de propiedad 2'     => $variant->optionTwo,
                            'Valor de la propiedad 2'   => $variant->valueTwo,
                            'Nombre de propiedad 3'     => $variant->optionThree,
                            'Valor de la propiedad 3'   => $variant->valueThree,
                        );
                    }
                }
                $sheet->fromArray($rows);
            });
        })->store('csv','exports');

        return response()->json(['path' => url("exports/$subdomain.products_export.csv")]);
    }

    public function postImport(ProductListImport $import){
        $reader = $import->first();
        $fileName = $import->fileName; 
        return view('admin.product.upload',compact('reader','fileName'));
    }

    public function postCommit(ProductListImport $import , Request $request){
            $import->each(function ($item) use ($request){
                $array = $item->mapWithKeys(function ($value , $key) use ($request){
                    $index = array_search($key, $request->get('columna'));
                    $equal = $request->get('map')[$index];
                    if($equal != 'ignore')
                        return [ $equal => $value];
                });
                if (!$array->has('name'))
                    return redirect()->to('admin/products/import');

                $product = Product::firstOrCreate([
                    'uuid' => Uuid::generate(4)->string,
                    'name' => $array->get('name'),
                    'slug' => $array->has('slug') ? $array->get('slug') : '',
                    'description' => $array->has('description') ? $array->get('description') : '',
                    'publish' => $array->has('publish') ? $array->get('publish') : 1,
                ]);

                $product->collection()->create([
                    'uuid' => Uuid::generate(4)->string,
                    'promotion' =>   $array->has('promotional_price')
                    &&  $array->get('promotional_price') > 0 ? : 0,
                    'primary'   => 1
                ]);

                $product->variants()->create([
                    'Uuid' => Uuid::generate(4)->string ,
                    'price'   => $array->get('price'),
                    'promotional_price'   => $array->get('price_promotion_amount'),
                    'weight'   => $array->get('weight'),
                    'stock'   => $array->get('stock'),
                    'sku'   => $array->get('sku'),
                ]);
            });
            return redirect()->to('/admin/products/import')
                ->with('message', array('type' => 'success' , 'message' => 'Estamos cargando tus productos, cuando finalicemos te notificaremos por correo'));
    }

    public function import(){
        $categories = Category::orderBy('name','DESC')->pluck('name' , 'id');
        
        return view('admin.product.import',compact('categories'));
    }

    public function editProduct($subdomain , Request $request ,$id){
        $product        =   Product::where('uuid',$id)->first();
        $variant        =   Variant::where('product_id',$product->id)->first();
        $providers      =   Provider::where('shop_id',$product->shop_id)->get();
        $categories     =   Category::where('shop_id',$request->shop->id)->get();
        return view('admin.product.edit',compact('product','variant','categories','providers'));
    }

    /**
     * @param $subdomain
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function putProduct($subdomain,Request $request , $id){
        $product = Product::where('uuid',$id)->first();
        $publish            =   $request->publish;
        $provider_id        =   $request->provider_id;
        $cat_arrray         =   $request->category_id;
        $current_cats       =   $product->categories->pluck('id')->toArray();
        $variant = Variant::where('product_id',$product->id)->first();
        $section    =   Section::where('product_id',$product->id)->first();
        if (!is_null($request->publish)) {   $publish    =   1;  }
        if (empty($request->provider_id)) {   $provider_id    =   null;  }
        $product->update([
            'name' => $request->name,
            'slug' => $request->slug,
            'seo_title' => $request->seo_title,
            'seo_description' => $request->seo_description,
            'description' => $request->description,
            'large'     => $request->large,
            'height'     => $request->height,
            'width'     => $request->width,
            'provider_id'     => $provider_id,
            'publish' => $publish
            ]);
        
        $variant->update([
            'sku' => $request->sku,
            'price' => $request->price,
            'price_declared' => $request->price_declared,
            'promotional_price' => $request->promotional_price,
            'weight'    => $request->weight,
            'stock'     => $request->stock,
            'show'      => $request->show
            ]);

        
        $section->update([
            'primary' => $request->primary,
            'shipping_free' => $request->shipping_free,
            'promotion' => $request->promotion
            ]);
        if (count($cat_arrray) > 0) {
            foreach ($cat_arrray as $new_cat) {
            if(!in_array($new_cat, $current_cats)){
                $product->categories()->attach($new_cat);
            }else{
                foreach ($current_cats as $current_cat) {
                    if (!in_array($current_cat, $cat_arrray)) {
                        $product->categories()->detach($current_cat);
                    }
                }
                
            }
        }
        }else{
            foreach ($product->categories as $current_cat) {
                $product->categories()->detach($current_cat);
            }
        }

        if(!empty($request->get('image-delete'))) {
            $image = explode(',',$request->get('image-delete'));
            $image = Image::where('name', $image)->first();
            $image->delete();
        }

        return redirect()->to('admin/products')->with('message', array('type' => 'success' , 'message' => 'Editado correctamente'));

    }

    public function show($subdomain , $slug)
    {
        $product = Product::all()
            ->where('products.slug','=',$slug)
            ->select('products.*')
            ->get();

        return response()->json(array(
            'product' => $product
        ));
    }
    public function getImage($subdomain ,$id , Request $request){
        $product = Product::where('uuid',$id)->first();
        return view('admin.product.image',compact('product'));
    }
    public function refreshProduct($subdomain , Request $request , $id){
        $product = Product::where('uuid',$id)->first();
        $variant = Variant::where('product_id',$product->id)->first();
        foreach ($request->file as $file) {
            $variant->images()->create([
                'name' => $file
            ]);
        }
        return redirect('admin/products/edit/'.$id.'?client_secret='.$request->shop->uuid.'&client_id='.$request->shop->id);
    }


}
