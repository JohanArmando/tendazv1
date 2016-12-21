<?php
namespace Tendaz\Http\Controllers\Admin\Marketing;

use Symfony\Component\HttpFoundation\Request;
use Tendaz\Http\Controllers\Controller;
use Tendaz\Models\Categories\Category;
use Tendaz\Models\Coupon\Coupon;
use Tendaz\Models\Products\Product;
use Tendaz\Models\Social\SocialLogin;
use Tendaz\Models\Marketing\Trends;

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
        $current_config     =   Trends::where('shop_id',auth('admins')->user()->shop->id)->first();
        
        $products   = Product::where('shop_id',auth('admins')->user()->shop->id)->get();
        $categories = Category::where('shop_id',auth('admins')->user()->shop->id)->get();
        $coupons    = Coupon::where('shop_id',auth('admins')->user()->shop->id)->get();
        return view('admin.marketing.robot',compact('products','categories','coupons','current_config'));
    }

    public function postRobot(Request $request){
        $current_config         = Trends::where('shop_id',auth('admins')->user()->shop->id)->first();
        $products_array         = Product::where('shop_id',auth('admins')->user()->shop->id)->pluck('id');
        $categories_array       = Category::where('shop_id',auth('admins')->user()->shop->id)->pluck('id');
        $trend_config           = $request->all();

        foreach ($categories_array as $key => $cate) {
                    $cateU   =   Category::where('id',$cate)->first();
                    $cateU->update(['blacklist' => 0]);
        }
        if (isset($trend_config['categories'])) {
            foreach ($trend_config['categories'] as $cate) {
                $categories     =   Category::where('id',$cate)->first();
                $categories->update([
                        'blacklist' => 1
                    ]);
            }
        }
        foreach ($products_array as $key => $pro) {
                    $proU   =   Product::where('id',$pro)->first();
                    $proU->update(['blacklist' => 0]);
        }
        if (isset($trend_config['products_black'])) {
            foreach ($trend_config['products_black'] as $products) {
                $product     =   Product::where('id',$products)->first();
                $product->update(['blacklist' => 1]);
            }
        }
        return redirect()->back()->with('message',array('type' => 'success' , 'message' => 'Datos actualizados correctamente'));
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
