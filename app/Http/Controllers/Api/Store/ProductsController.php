<?php

namespace Tendaz\Http\Controllers\Api\Store;


use Gate;
use Tendaz\Http\Controllers\Controller;
use League\Fractal\Resource\NullResource;
use Tendaz\Transformers\ProductTransfomer;
use Symfony\Component\HttpFoundation\Request;
use League\Fractal\Serializer\ArraySerializer;
use League\Fractal\Pagination\IlluminatePaginatorAdapter;

class ProductsController extends Controller
{
    public function __construct()
    {

    }

        public function index(Request $request, $subdomain , $slug = null)
        {
            $resource = $request->shop->products();

            if($slug){
                $resource->byCategory($slug);
            }

            if($request->get('limit')){
                $resource->limit($request->get('limit' , 10));
            }

                $paginator = $resource->paginate($request->get('per_page' , 10));

            return fractal()
                    ->collection($paginator->getCollection(), new ProductTransfomer($request->get('values')))
                    ->serializeWith(new ArraySerializer())
                    ->parseIncludes($request->get('include'))
                    ->parseExcludes($request->get('exclude'))
                    ->withResourceName('products')
                    ->paginateWith(new IlluminatePaginatorAdapter($paginator))
                    ->toArray();
        }

        public function null(){
            return new NullResource();
        }

        public function show(Request $request , $subdomain , $slug)
        {
            if($request->shop->products()->where('slug' , $slug)->exists()){
                return fractal()
                    ->item($request->shop->products()->where('slug' , $slug)->first(), new ProductTransfomer($request->get('values')))
                    ->serializeWith(new ArraySerializer())
                    ->parseIncludes($request->get('include'))
                    ->parseExcludes($request->get('exclude'))
                    ->withResourceName('products')
                    ->toArray();
            }else{
                return [$this->null()];
            }
        }
    }
