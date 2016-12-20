<?php

namespace Tendaz\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Tendaz\Http\Controllers\Controller;
use Tendaz\Models\Geo\City;
use Tendaz\Models\Geo\State;
use Tendaz\Models\Order\Provider;

class ProvidersController extends Controller
{
    public function index()
    {
        $providers = Provider::all();
        $departments =  State::where('country_id',50)->get();
        $cities =  City::where('name' , '<>' , '')->orderBy('name', 'asc')->get();
        return view('admin.providers.index',compact('providers','departments','cities'));
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

    public function show($subdomain , $id)
    {
        $provider = Provider::where('uuid',$id)->first();
        $departments =  State::where('country_id',50)->get();
        $cities =  City::where('name' , '<>' , '')->orderBy('name', 'asc')->get();
        return view('admin.providers.edit',compact('provider','departments','cities'));
    }

    public function update($subdomain , $id , Request $request)
    {
        $provider = Provider::where('uuid',$id)->first();
        $provider->fill($request->all());
        $provider->save();
        return redirect()->to('admin/providers')->with('message', array('type' => 'success' , 'message' => 'Provedor editado correctamente'));
    }

    public function destroy($subdomain ,Provider $provider){
        $provider->delete();
        return back()->with('message', array('type' => 'success' , 'message' => 'Provedor eliminado correctamente'));
    }

}
