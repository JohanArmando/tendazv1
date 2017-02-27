<?php

namespace Tendaz\Http\Controllers\Admin\Marketing;

use Illuminate\Http\Request;
use Tendaz\Http\Controllers\Controller;
use Tendaz\Models\Categories\Category;
use Tendaz\Models\Coupon\Coupon;

class CouponController extends Controller
{
    public function index()
    {
        $coupons = Coupon::orderBy('id','ASC')->get();
        $categories = Category::orderBy('id','ASC')->pluck('name','id');
        return view('admin.marketing.coupons',compact('coupons', 'categories'));
    }

    public function store(Request $request){
        Coupon::CreateWithRestrictions($request->discount);
        return redirect()->to('admin/marketing/coupons')->with('message',array('type' => 'success' , 'message' => 'Cupon creado correctamente'));
    }
    
    public function show($subdomain , Coupon $coupon){
        if($coupon->available == 1){
            $available = Coupon::where('id',$coupon->id)->first();
            $available->available = 0;
            $available->save();
        }else{
            if($coupon->available == 0){
                $available = Coupon::where('id',$coupon->id)->first();
                $available->available = 1;
                $available->save();
            }
        }
        !$coupon->available  ? $message = 'Cupos Desactivado de forma correcta' : $message = 'Cupon activado de forma correcta';
        return redirect()->back()->with('message',array('type' => 'success' , 'message' => $message));
    }

    public function edit($subdomain , Coupon $coupon)
    {
        $categories = Category::orderBy('id','ASC')->pluck('name','id');
        return view('admin.marketing.edit-coupons',compact('coupon', 'categories'));
    }

    public function update($subdomain , Coupon $coupon,Request $request){
        $coupon->update($request->discount);
        $coupon->save();
        return redirect()->to('admin/marketing/coupons')->with('message',array('type' => 'success' , 'message' => 'Cupon Editado correctamente'));
    }

    public function destroy($subdomain , Coupon $coupon){
        $coupon->delete();
        return redirect()->to('admin/marketing/coupons')->with('message',
            array('type' => 'success' , 'message' => 'Cupon eliminado de forma correcta'));
    }

}
