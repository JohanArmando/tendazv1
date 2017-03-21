<?php

namespace Tendaz\Http\Controllers\Admin\Account;

use Illuminate\Http\Request;
use Tendaz\Http\Controllers\Controller;
use Tendaz\Models\Geo\Country;
use Tendaz\Models\Store\Store;

class AccountController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index(Request $request)
    {
        $store = Store::where('shop_id',Auth('admins')->user()->id)->first();
        $countries = Country::all();
        return view('admin.account.myAccount',compact('store','countries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($subdomian, $id)
    {
        if ($id == 'self') {
            $data = Auth('admins')->user()->shop->store;
            if($data->state_id == null) $data->state_id = 709; else $data->state_id = $data->city->state->id;
            return $data;

        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->shop->store->update($request->all());
        return redirect()->back()->with('message',array('type' => 'success' , 'message' => 'Datos guardados correctamente'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $store = Auth('admins')->user();
        $store->active = 0;
        $store->save();
        return redirect()->to('/')->with('message',array('type' => 'warning' , 'message' => 'Tu tienda y usuario han sido cancelados'));
    }
}
