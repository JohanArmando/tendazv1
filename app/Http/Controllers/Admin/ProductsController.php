<?php

namespace Tendaz\Http\Controllers\Admin;

use Excel;
use Tendaz\Models\Store\Shop;
use Webpatser\Uuid\Uuid;
use Illuminate\Http\Request;
use Tendaz\Models\Products\Option;
use Tendaz\Models\Products\Product;
use Tendaz\Models\Products\Variant;
use Tendaz\Models\Categories\Category;
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
                    ->collection(Variant::orderBy('id' , 'desc')->whereHas('product')->with('product')->groupBy('product_id')->get(), new ProductTransformer())
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

    public function create()
    {
        $categories = Category::pluck('name' , 'id');
        $options = Option::get(['id' , 'name']);
        return view('admin.product.create',compact('categories' , 'options'));
    }


    public function store(Request $request)
    {
        $response = Product::createWithVariant($request->all());
        return response()->json($response , 200);
    }


    public function edit($subdomain ,Product $product)
    {
        $categories = Category::pluck('name' , 'id');
        $options = Option::get(['id' , 'name']);
        return view('admin.product.edit',compact('product' , 'categories' , 'options'));
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
           $variant->information->update($request->all());
            return http_response_code(202);
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
                            'catetgorias'               => $product->StringCategories(),
                            'Nombre de propiedad 1'     => $variant->optionOne,
                            'Valor de la propiedad 1'   => $variant->valueOne,
                            'Nombre de propiedad 2'     => $variant->optionTwo,
                            'Valor de la propiedad 2'   => $variant->valueTwo,
                            'Nombre de propiedad 3'     => $variant->optionThree,
                            'Valor de la propiedad 3'   => $variant->valueThree,
                            'Precio'                    => $variant->price,
                            'Precio Promocional'        => $variant->promotional_price,
                            'Stock'                     => $variant->stock,
                            'Peso'                      => $variant->weight,
                            'sku'                       => $variant->sku,
                            'Mostrar En Tienda'         => $product->showInStore,
                            'Descripcion'               => $product->description,
                        );
                    }
                }
                $sheet->fromArray($rows);
            });
        })->store('xls','exports');

        return response()->json(['path' => url("exports/$subdomain.products_export.xls")]);
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
                $product = Product::firstOrCreate([
                    'name' => $array->get('name'),
                    'slug' => $array->get('slug'),
                    'description' => $array->get('description'),
                    'publish' => $array->get('publish'),
                ]);
                $product->collection()->create([
                    'uuid' => Uuid::generate(4)->string,
                    'promotion' =>   $array->get('promotional_price')
                    &&  $array->get('promotional_price') > 0 ? : 0,
                    'primary'   => 1
                ]);

                $variant = $product->variants()->create([
                    'Uuid' => Uuid::generate(4)->string ,
                    'price'   => $array->get('price'),
                    'promotional_price'   => $array->get('promotional_price'),
                    'weight'   => $array->get('weight'),
                    'stock'   => $array->get('stock'),
                    'sku'   => $array->get('sku'),
                ]);

                for ($i = 1 ; $i > 4 ; $i++){
                    if(!is_null($array->get("option_name_$i"))){
                        if (Option::where('name', $array->get("option_name_$i"))->exists()) {
                            $option = Option::where('name', $array->get("option_name_$i"))->first();
                            if ($option->values()->where('name', $array->get("option_value_$i"))->exists()) {
                                $value = $option->values()->where('name', $array->get("option_value_$i"))->first();
                            } else {
                                $value = $option->values()->create([
                                    'uuid' => Uuid::generate(4)->string,
                                    'name' => $array->get("option_value_$i")
                                ]);
                            }
                        } else {
                            $option = Option::create([
                                'uuid' => Uuid::generate(4)->string,
                                'name' => $array->get("option_name_$i"),
                            ]);
                            $value = $option->values()->create([
                                'uuid' => Uuid::generate(4)->string,
                                'name' => $array->get("option_value_$i")
                            ]);
                        }
                        $variant->optionValue()->attach($value->id , ['uuid' => Uuid::generate(4)->string]);
                    }
                }
            });
            return redirect()->to('/admin/products/import')
                ->with('message', array('type' => 'success' , 'message' => 'Estamos cargando tus productos, cuando finalicemos te notificaremos por correo'));
    }

    public function import(){
        $categories = Category::orderBy('name','DESC')->pluck('name' , 'id');
        return view('admin.product.import',compact('categories'));
    }

    public function editProduct($subdomain , $id, Request $request){
        $categories = Category::where('shop_id',$request->shop->id)->get();
        $product = Product::where('uuid',$id)->first();
        $variant = Variant::where('product_id',$product->id)->first();
        return view('admin.product.edit',compact('product','categories','variant'));
    }

    public function putProduct($subdomain,$id, Request $request){
        $publish    =   $request->publish;
        $cat_arrray =   $request->category_id;
        if (is_null($request->publish)) {   $publish    =   11;  }

        $product = Product::where('uuid',$id)->first();
        $product->update([
            'name' => $request->name,
            'slug' => $request->slug,
            'seo_title' => $request->seo_title,
            'seo_description' => $request->seo_description,
            'description' => $request->description,
            'publish' => $publish
            ]);

        $variant = Variant::where('product_id',$product->id)->first();

        
        $variant->update([
            'sku' => $request->sku,
            'price' => $request->price,
            'price_declared' => $request->price_declared,
            'promotional_price' => $request->promotional_price,
            'weight'    => $request->weight,
            'stock'     => $request->stock,
            'show'      => $request->show
            ]);
        

        $check_cat_db = Categorypro::where('product_id',$product->id)->pluck('category_id')->toArray();    
        foreach ($cat_arrray as $cat) {
            $check_cat  = Categorypro::where('category_id',$cat)->where('product_id',$product->id)->first();
            if (empty($check_cat)) {
                Categorypro::Create([
                    'product_id'    => $product->id,
                    'category_id'   => $cat
                    ]);
            }   elseif (!in_array($cat,$check_cat_db)) {
                    $check_cat->delete();
            }
            else{

            }
        }
        // dd($check_cat_db);
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
    public function ajaxDelete($product_id){
        
    }
}
