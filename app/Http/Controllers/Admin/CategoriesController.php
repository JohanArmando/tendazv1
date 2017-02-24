<?php

namespace Tendaz\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Tendaz\Http\Controllers\Controller;
use Tendaz\Models\Categories\Category;

class CategoriesController extends Controller
{
    public function index(Request $request)
    {
        if($request->wantsJson()){
            $array = array();
            foreach( Category::get()->toHierarchy() as $node){
                array_push($array , $node);
            }
            $categorias = $array;
            return response()->json([$categorias]);
        }
        return view('admin.categories.index');
    }
    public function store(Request $request)
    {
        if($request->wantsJson()){
            Category::buildTree($request->except('client_id' , 'client_secret'));
            $array = array();
            foreach( Category::get()->toHierarchy() as $node){
                array_push($array , $node);
            }

            $categorias = $array;
            return response()->json($categorias);
        }
        if($request->ajax()){
            if($request->get('sub') == ''){
                $category = Category::create($request->all());
                $category->save();
                $categories = Category::orderBy('name','ASC')->get();
                return response()->json([$categories,$category]);
            }else {
                $sub = Category::where('id', '=', $request->get('sub'))->first();
                $category = $sub->children()->create($request->all());
                $category->save();
                $categories = Category::orderBy('name','ASC')->get();
                return response()->json([$categories,$category]);
            }
        }
    }

    public function destroy($subdomain , $category)
    {
        $category = Category::where('uuid' , $category)->first();
        $category->delete();
        $array = array();
        foreach( Category::get()->toHierarchy() as $node){
            array_push($array , $node);
        }
        $categorias = $array;
        return response()->json($categorias);
    }

}
