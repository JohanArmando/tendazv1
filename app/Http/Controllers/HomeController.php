<?php

namespace Tendaz\Http\Controllers;


use igaster\laravelTheme\Facades\Theme;
use Tendaz\Models\Customer;
use Tendaz\Models\Marketing\Trend;
use Tendaz\Models\Order\Consult;
use Tendaz\Models\Products\Product;
use Tendaz\Models\Social\SocialLogin;
use Tendaz\Models\Store\Shop;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('build' , ['except' => ['build']]);
    }

    public function home(Request $request)
    {
        $sliders = Shop::all();
        return view(Theme::current()->viewsPath.'.index',compact('sliders'));
    }
    public function product (Request $request ,$subdomain , $slug = '')
    {
        if (!$request->has('search') && !is_null($request->search))
            return redirect()->to('/products');

        $slugArray = explode('/' , $slug);
        $category = $slugArray[count($slugArray) - 1];
        return view(Theme::current()->viewsPath.'.products' , compact('category'));
    }

    public function cart (){
        return view(Theme::current()->viewsPath.'.cart');
    }

    public function detail ($subdomain , $slug){
        $product = Product::where('slug',$slug)->first();
        Trend::create([
            'customer_id'       => Auth('web')->user(),
            'trend_id'          => $product->id,
            'hits'              => 1,
            'trend_type'        => "product",
        ]);
        return view(Theme::current()->viewsPath.'.detail',compact('slug'));
    }

    public function detail2 ($subdomain , $slug, $uuid){
        $product = Product::where('slug',$slug)->first();
        if (Auth('web')->user()) {
            Trend::create([
                'customer_id'       => Auth('web')->user(),
                'trend_id'          => $product->id,
                'hits'              => 1,
                'trend_type'        => "product",
            ]);
            return Auth('web')->user();
        }
        
        return view(Theme::current()->viewsPath.'.detail',compact('slug','uuid'));
    }

    public function contact (){
        return view(Theme::current()->viewsPath.'.contact');
    }

    public function email (Request $request){

        $customer = Customer::where('email',$request->get('email'))->first();
        if(Customer::where('email',$request->get('email'))->exists()){
            Consult::create([
                'phone'       => $request->get('phone'),
                'message'     => $request->get('message'),
                'allowed'     => $request->get('subject'),
                'customer_id' => $customer->id
            ]);
        }else{
            $customer = Customer::create([
                'name'        => $request->get('name'),
                'phone'       => $request->get('phone'),
                'email'       => $request->get('email')
            ]);
            Consult::create([
                'phone'       => $request->get('phone'),
                'message'     => $request->get('message'),
                'allowed'     => $request->get('subject'),
                'customer_id' => $customer->id
            ]);
        }
        /*;*/
        return redirect()->to('contact')->with('message' , array('message' =>
            'El mensaje ha sido enviado con exito, muchas gracias.' , 'type' => 'info'));
    }

    public function login ($subdomain , Request $request){
        $user = new Customer();
        $socials = SocialLogin::where('shop_id',$request->shop->id)->get();
        return view(Theme::current()->viewsPath.'.login' , ['users' => $user, 'socials' => $socials]);
    }

    public function checkout(Request $request)
    {
        return view('layouts.checkout' , ['shop' => $request->shop]);

    }
    public function build(Request $request)
    {
        return view(Theme::current()->viewsPath.'.buildpage');
    }

    public function profile(){
        return view(Theme::current()->viewsPath.'.account.profile');
    }
    public function change_password(){
        return view(Theme::current()->viewsPath.'.account.change_password');
    }

    public function getOrders()
    {
        return view(Theme::current()->viewsPath.'.orders.index');
    }

    /**
     * @return string
     */
    public function showOrder($subdomain , $uuid , Request $request)
    {
        return view(Theme::current()->viewsPath.'.orders.show' , ['uuid' => $uuid]);
    }

}
