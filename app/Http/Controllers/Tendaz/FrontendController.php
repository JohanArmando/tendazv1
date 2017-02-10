<?php

namespace Tendaz\Http\Controllers\Tendaz;

use Illuminate\Support\Facades\Session;
use Tendaz\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Tendaz\Models\Store\Shop;
use Tendaz\Models\Subscription\Plan;
use Illuminate\Http\Request;
use Validator;

class FrontendController extends Controller
{
    public function __construct()
    {
        $this->path = env('DB_DATABASE');
    }

    public function index(){
        foreach (Shop::all() as $shop){
            $shop->newSubscription(Plan::find(4) , \Carbon\Carbon::today() ,  \Carbon\Carbon::today()->addDays(15));
        }
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
}
