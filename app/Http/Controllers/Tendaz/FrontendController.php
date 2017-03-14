<?php

namespace Tendaz\Http\Controllers\Tendaz;

use Carbon\Carbon;
use Tendaz\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Tendaz\Models\Domain\Domain;
use Tendaz\Models\Store\Shop;
use Tendaz\Models\Store\Store;
use Tendaz\Models\Subscription\Plan;
use Illuminate\Http\Request;
use Tendaz\Models\User;
use Validator;
use Tendaz\Api\Twocheckout;

class FrontendController extends Controller
{
    public function __construct()
    {
        $this->path = env('DB_DATABASE');
    }

    public function index(){
        /*foreach (Shop::all() as $shop){
            $shop->newSubscription(Plan::find(4) , \Carbon\Carbon::today() ,  \Carbon\Carbon::today()->addDays(15));
        }*/
        return view("$this->path.index");
    }
    public function plans(){
        $plans = Plan::where('interval' , NULL)->get();
        return view("$this->path.plans" , ['plans' => $plans]);
    }
    
    public function contact(){
        return view("$this->path.contact");
    }

    public function sendEmail(Request $request){
        $this->validator($request->all())->validate();
        Mail::to('info@tendaz.com' , 'Info Tendaz')
            ->send(new ContactEmail($request->all()));
        return redirect($this->redirectPath())->with('status' , trans('email.contact'));
    }
    
    public function redirectPath(){
        return property_exists($this , 'redirectPath') ?
            $this->redirectPath : '/contacto';
    }
    
    public function about(){
        return view("$this->path.about");
    }
    
    public function validator(array  $data){
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|in:service,suggestions,product',
            'message' => 'required|max:510',
        ]);
    }

    public function payment(Request $request)
    {
        $privateKey = env('PRIVATE_KEY_TWO');
        $resellerId = env('SELLER_ID_TWO');
        Twocheckout::privateKey($privateKey);
        Twocheckout::sellerId($resellerId);
        Twocheckout::verifySSL(false);
        Twocheckout::sandbox(env('SANBOX_TWO',false));
        Twocheckout::username('davidfigueroar9');
        Twocheckout::password('D19979872f');

        $plan = Plan::whereUuid($request->get('plan'));

        $data2 = [
            "sellerId" => env('SELLER_ID_TWO'),
            "merchantOrderId" => "123",
            "token" => $request->get('token'),
            "currency" => "USD",
            "lineItems" => [
                [
                    "type" => 'Plan',
                    "price" => $plan->price,
                    "productId" => $plan->uuid,
                    "name" => $plan->name,
                    "quantity" => "1",
                    "tangible" => "N",
                    "recurrence" => "One Month",
                    "duration" => 'Forever',
                    "description" => $plan->description
                ]
            ],
            "billingAddr" => [
                "name" => $request->name,
                "addrLine1" => $request->addrLine1,
                "city" => $request->city,
                "state" =>  $request->state,
                "zipCode" => $request->zipCode,
                "country" =>  $request->country,
                "email" => $request->email,
                "phoneNumber" => '+68 523 523 63'
            ]
        ];
        $sale_id = null;
        try {
            $charge = Twocheckout\Twocheckout_Charge::auth($data2);
            $sale_id = $charge['response']['orderNumber'];

        } catch (Twocheckout_Error $e) {
            $this->assertEquals('Unauthorized', $e->getMessage());
        }

        //create user and shop

        $user = User::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => $request->get('password'),
        ]);

        $shop = $user->shop()->save(new Shop(['name' => $request->get('shop_name')]));

        $shop->domains()->save(new Domain([
            'name' => $shop->name,
            'domain' => $shop->name,
            'ssl' => $shop->name,
            'main' => 1,
            'active' => 1,
            'state' => 'OK'
        ]));

        $shop->store()->save(new Store(['category_shop_id' => '26']));

        if (!$plan)
            abort(404);

        $shop->newSubscription($plan , Carbon::today() , Carbon::today()->addDays(30))->skipTrial()->onRecurrent($sale_id);;

        return redirect()->back()->with( 'message' , ['type' => 'success' , 'message' => 'Tu plan fue comprado exitosamente!.Inicia sesion con las credenciales que se te enviaron a tu correo']);
    }
}
