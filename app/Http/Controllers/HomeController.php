<?php

namespace Tendaz\Http\Controllers;


use igaster\laravelTheme\Facades\Theme;
use Tendaz\Models\Customer;
use Illuminate\Support\Facades\Mail;
use Tendaz\Models\Marketing\Trend;
use Tendaz\Models\Order\Consult;
use Tendaz\Mail\FraudStatusChange;
use Tendaz\Models\Products\Product;
use Tendaz\Models\Social\SocialLogin;
use Tendaz\Models\Subscription\Subscription;
use Tendaz\Models\Store\Shop;
use Tendaz\Models\Categories\Category;
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

    public function twoCheckout(Request $request)
    {
        if ($request->message_type == 'FRAUD_STATUS_CHANGED') {
            if ($request->fraud_status == "fail") {

                 $subscription = Subscription::where('sale_id',$request->sale_id)->first();
                 $subscription->update([
                    'payment_status' => 'fail',
                    'end_at' => \Carbon\Carbon::tomorrow(),
                    'recurrent' => 0
                 ]);
                 Mail::to($subscription->shop->user)->
                  send(new FraudStatusChange([
                    'subject' => 'Su pago no paso la verificacion de fraude',
                    'name' => 'tendaz',
                    'email' => 'info@tendaz.com',
                    'name_client' => $subscription->shop->user->name,
                    'text' =>   'La dirección de facturación que
                                  suministro en el pago de su plan no son
                                  correspondientes con los de su targeta,
                                  por lo que el pago no ha sido efectuado con éxito',
                    'url' =>  url('login')
                  ]));

                return ['message' => 'fail', 'subscription' => $subscription ];
            }
            if ($request->fraud_status == "pass") {
              $subscription = Subscription::where('sale_id',$request->sale_id)->first();
              $subscription->update([
                 'payment_status' => 'pass'
              ]);

             return ['message' => 'fail', 'subscription' => $subscription ];
            }
            if ($request->fraud_status == "wait") {
                $subscription = Subscription::where('sale_id',$request->sale_id)->first();
                $subscription->update([
                   'payment_status' => 'wait'
                ]);

                return ['message' => 'fail', 'subscription' => $subscription ];
            }
        }
        if ($request->message_type == 'RECURRING_INSTALLMENT_FAILED') {
            $subscription = Subscription::where('sale_id',$request->sale_id)->first();
            Mail::to($subscription->shop->user)->
             send(new FraudStatusChange([
               'subject' => 'No se pudo procesar el pago correspondiente con su subscripción',
               'name' => 'tendaz',
               'email' => 'info@tendaz.com',
               'name_client' => $subscription->shop->user->name,
               'text' =>   'No se puede efectuar el pago autom&aacute;tico de su subscripci&oacute;n, trend&aacute;s 3 dias de tu tienda activa.
                Comuniquese con nosotros para solventar el problema',
               'url' =>  url('login')
             ]));
            $subscription->update([
               'payment_status' => 'recurring_failed',
               'end_at' => \Carbon\Carbon::tomorrow(),
               'recurrent' => 0
            ]);

            return ['message' => 'recurring_failed', 'subscription' => $subscription ];
        }
        return $request->all();
    }

    public function product (Request $request ,$subdomain , $slug = '')
    {
        if (!$request->has('search') && !is_null($request->search))
            return redirect()->to('/products');

        $slugArray = explode('/' , $slug);
        $category = $slugArray[count($slugArray) - 1];
        $cat = Category::where('slug',$category)->first();
        $this->trend($cat, 'category');
        return view(Theme::current()->viewsPath.'.products' , compact('category'));
    }

    public function cart (){
        return view(Theme::current()->viewsPath.'.cart');
    }

    public function detail ($subdomain , $slug){
        $product = Product::where('slug',$slug)->first();
        $this->trend($product, 'product');
        return view(Theme::current()->viewsPath.'.detail',compact('slug'));
    }
    private function trend ($product, $type){
      $id = null;
      if (isset($_COOKIE["uuid"])) {
          $user = Customer::where('uuid',$_COOKIE["uuid"])->first();
          $id = $user->id;
      }
      $trend = Trend::create([
          'customer_id'       => $id,
          'trend_id'          => $product->id,
          'trend_type'        => $type,
      ]);
      if ($trend) {
          return true;
      }else {
          return false;
      }
    }


    public function detail2 (Request $request, $subdomain , $slug, $uuid){
        $product = Product::where('slug',$slug)->first();
        $this->trend($product, 'product');
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
