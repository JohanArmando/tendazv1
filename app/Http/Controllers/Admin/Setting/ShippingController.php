<?php

namespace Tendaz\Http\Controllers\Admin\Setting;

use Illuminate\Http\Request;
use Tendaz\Http\Controllers\Controller;
use Tendaz\Models\Shipping\ShippingMethod;
use Tendaz\Transformers\ShippingMethodTransformer;

class ShippingController extends Controller
{
    public function index(Request $request)
    {
        if($request->wantsJson()){
            return fractal()
                ->collection(ShippingMethod::all() , new ShippingMethodTransformer())
                ->withResourceName('shippingMethods')
                ->toJson();
        }
        return view('admin.setting.shipping');
    }

    public function destroy($subdomain , ShippingMethod $shipping)
    {
        $shipping->delete();
        return ['' , 200];
    }

    public function store(Request $request)
    {
        $shippingMethod = ShippingMethod::create($request->all());
        return fractal()
            ->item($shippingMethod, new ShippingMethodTransformer())
            ->toJson();
    }

    public function update($subdomain , ShippingMethod $shipping , Request $request)
    {
        $shipping->update($request->all());
        return fractal()
            ->item($shipping, new ShippingMethodTransformer())
            ->toJson();
    }

}
