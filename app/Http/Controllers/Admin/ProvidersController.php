<?php

namespace Tendaz\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Tendaz\Http\Controllers\Controller;
use Tendaz\Models\Country;
use Tendaz\Models\Order\Provider;

class ProvidersController extends Controller
{


    public function index()
    {
        $providers = Provider::all();
        $departments =  DB::table('states')->get();
        $countries =  Country::pluck('name' , 'id');
        return view('admin.providers.index',compact('providers','departments','countries'));
    }

    public function create()
    {
        return view('admin.providers.index');
    }


    public function store(Request $request)
    {
        Provider::create($request->all());
        return redirect()->to('admin/providers')->with('message', array('type' => 'success' , 'message' => 'Provedor creado correctamente'));
    }


    public function edit()
    {

    }

    public function update()
    {

    }

    public function destroy($subdomain ,Provider $provider){
        $provider->delete();
        return back()->with('message', array('type' => 'success' , 'message' => 'Provedor eliminado correctamente'));
    }

}
