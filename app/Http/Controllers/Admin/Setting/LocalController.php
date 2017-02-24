<?php

namespace Tendaz\Http\Controllers\Admin\Setting;

use Illuminate\Http\Request;
use Tendaz\Http\Controllers\Controller;
use Tendaz\Models\Send\Local;
use Tendaz\Transformers\LocalTransformer;


class LocalController extends Controller
{
    public function index()
    {
        return fractal()->collection(Local::all() , new LocalTransformer())->toJson();
    }
    
    public function store(Request $request)
    {
        $local = Local::create($request->all());
        return fractal()->item($local, new LocalTransformer())->toJson();
    }
    
    public function destroy($subdomain, Local $local){
        $local->delete();
        return http_response_code(200);
    }

    public function update($subdomain, Local $local , Request $request){
        $local->update($request->all());
        return fractal()->item($local, new LocalTransformer())->toJson();
    }

}
