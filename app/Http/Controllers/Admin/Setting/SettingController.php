<?php

namespace Tendaz\Http\Controllers\Admin\Setting;

use Illuminate\Http\Request;
use Tendaz\Http\Controllers\Controller;
use Tendaz\Models\Country;
use Tendaz\Models\Send\Local;
use Tendaz\Models\Shipping\ShippingMethod;

class SettingController extends Controller
{
    public function payment()
    {
        return view('admin.setting.payment');
    }

    public function shipping()
    {
        $country = Country::where('id',  Auth('admins')->user()->shop->country_base_operation_id)->first();
        $countries = Country::pluck('name');
        $locals = Local::orderBy('name','desc')->paginate(10);
        $sends = ShippingMethod::orderBy('name','desc')->paginate(10);
        $shipping_methods = ShippingMethod::orderBy('name','desc')->paginate(10);
        return view('admin.setting.shipping',compact('countries','country','sends','shipping_methods','locals'));
    }

    public function domain()
    {
        return view('admin.setting.domain');
    }

    public function country($subdomain , Request $request)
    {
        $country = $request->get('country')+1;
        $request->shop->country_base_operation_id = $country;
        $request->shop->save();
        return redirect()->back()->with('message',array('type' => 'success' , 'message' =>
            'Has elegido de donde realizaras tus envios.'));
    }

}
