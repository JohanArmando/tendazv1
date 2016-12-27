<?php

namespace Tendaz\Http\Controllers\Admin\Marketing;


use Symfony\Component\HttpFoundation\Request;
use Tendaz\Http\Controllers\Controller;
use Tendaz\Models\Categories\Category;
use Tendaz\Models\Coupon\Coupon;
use Tendaz\Models\Marketing\TrendsPreference;
use Tendaz\Models\Products\Product;
use Tendaz\Models\Social\SocialLogin;

class MarketingController extends Controller
{


    public function index()
    {
        return view('admin.marketing.app-mobile');
    }

    public function config()
    {
        return view('admin.marketing.config_app_mobile');
    }

    public function robot()
    {
        $current_config     =   TrendsPreference::where('shop_id',auth('admins')->user()->shop->id)->first();
        $categories_black   =    unserialize($current_config['categories_black']);
        $products_black     =    $current_config['products_black'];
        // dd($categories_black);
        if (!count($current_config)) {
            $current_config =   0;
            // dd($current_config);
        }
        $products   = Product::where('shop_id',auth('admins')->user()->shop->id)->get();
        $categories = Category::where('shop_id',auth('admins')->user()->shop->id)->get();
        $coupons    = Coupon::where('shop_id',auth('admins')->user()->shop->id)->get();
        return view('admin.marketing.robot',compact('products','categories','coupons','products_black','current_config','categories_black'));
    }

    public function postRobot(Request $request){
        $current_config         = TrendsPreference::where('shop_id',auth('admins')->user()->shop->id)->first();
        $trend_config           = $request->all();
        $trend_config_coupon    = $trend_config['coupon'];
    
        if (!array_key_exists('coupon',$trend_config)) {
            return redirect()->back()->with('message',array('type' => 'warning' , 'message' => 'Debes crear al menos 1 cupon para poder activar a Maxi'));
        }
        if (!array_key_exists('categories',$trend_config)) {
            $trend_config_cats    = '';
        }
        else{
            $trend_config_cats  = serialize($trend_config['categories']);
        }
        if (!array_key_exists('products_black',$trend_config)) {
            $trend_config_products    = '';
        }
        else{
            $trend_config_products  = serialize($trend_config['products_black']);
        }

        if (!count($current_config)) {
            TrendsPreference::create([
                'products_black'    => $trend_config_products,
                'coupon_id'         => $trend_config_coupon,
                'categories_black'  => $trend_config_cats       
                ]);
            return redirect()->back()->with('message',array('type' => 'success' , 'message' => 'Datos guardados correctamente'));
        }  

        else{
            if(!empty($trend_config['products_black'])) { 
            $trend_config_products  = implode(",",$trend_config['products_black']);
            } else {
                $trend_config_products=null;
            };

            if(!empty($trend_config['categories'])) { 
                $trend_config_cats  = implode(",",$trend_config['categories']);
            } else {
                $trend_config_cats=null;
            };
            $current_config->update([
            'products_black' => $trend_config_products,
            'coupon_id' => $trend_config_coupon,
            'categories_black' => $trend_config_cats
            ]);
            return redirect()->back()->with('message',array('type' => 'success' , 'message' => 'Datos actualizados correctamente'));
        }
        
    }

    public function social()
    {
        if(SocialLogin::where('provider' , 'facebook')->exists()){
            $social_facebook = SocialLogin::where('provider' , 'facebook')->first();
        }else{
            $social_facebook = SocialLogin::firstOrCreate([
                'provider' => 'facebook'
            ]);
        }
        if(SocialLogin::where('provider' , 'google')->exists()){
            $social_google = SocialLogin::where('provider' , 'google')->first();
        }else{
            $social_google = SocialLogin::firstOrCreate([
                'provider' => 'google'
            ]);
        }
        return view('admin.marketing.social_login' , compact('social_facebook','social_google'));
    }

    public function postSocial($subdomain , SocialLogin $socialLogin ,  Request $request){
        $socialLogin->update($request->all());
        $socialLogin ? $message = array('type' => 'warning' , 'message' => 'Login activado correctamente con '.$socialLogin->provider)
            : $message = array('type' => 'warning' , 'message' => 'Hubo un error al activar el login');
        return redirect()->back()->with('message' , $message);
    }



}
