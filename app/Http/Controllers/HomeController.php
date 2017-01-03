<?php

namespace Tendaz\Http\Controllers;


use igaster\laravelTheme\Facades\Theme;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Tendaz\Models\Cart\Cart;
use Tendaz\Models\Customer;
use Tendaz\Models\Order\Consult;
use Tendaz\Models\Payment_method\PaymentValue;
use Tendaz\Models\Products\Product;
use Tendaz\Models\Products\Variant;
use Tendaz\Models\Shipping\ShippingMethod;
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
    public function product ($subdomain , $slug = '')
    {
        $slugArray = explode('/' , $slug);
        $category = $slugArray[count($slugArray) - 1];
        return view(Theme::current()->viewsPath.'.products' , compact('category'));
    }

    public function cart (){
        return view(Theme::current()->viewsPath.'.cart');
    }

    public function detail ($subdomain,$slug){
        return view(Theme::current()->viewsPath.'.detail',compact('slug'));
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

    public function login (){
        $user = new Customer();

        return view(Theme::current()->viewsPath.'.login' , ['users' => $user]);
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

}
