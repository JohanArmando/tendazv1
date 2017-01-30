<?php

namespace Tendaz\Http\Controllers\Tendaz;


use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Tendaz\Models\Subscription\Plan;
use Illuminate\Foundation\Auth\RegistersUsers;
use Tendaz\Http\Controllers\Controller;
use Tendaz\Models\Domain\Domain;
use Tendaz\Helpers\CleanString;
use Tendaz\Models\Store\Store;
use Tendaz\Models\Store\Shop;
use Tendaz\Http\Requests;
use Tendaz\Models\User;
use Carbon\Carbon;
use Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controllers
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $registerView = '';
    protected $guard = 'admins';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admins' , ['except' => 'register']);
        $this->path = env('DB_DATABASE');
        $this->loginView = "$this->path.login";
    }
    protected function guard()
    {
        $guard =  property_exists($this , 'guard') ?
            $this->guard : 'web';
        return Auth::guard($guard);
    }
    /**
     * @return string
     */
    public function redirectPath()
    {
        return Domain::DomainByUser().'/admin/';
    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'storename' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6'
        ],
            [
                'plan.required' => 'Por favor selecciona un plan'
            ]
        );
    }

    /**
     * Create a new users instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $storename = CleanString::cleanName($data['storename']);

        $user = User::create([
            'email' => $data['email'],
            'password' => $data['password'],
        ]);

        $shop = $user->shop()->save(new Shop(['name' => $storename]));

        $shop->domains()->save(new Domain([
            'name' => $shop->name,
            'domain' => $shop->name,
            'ssl' => $shop->name,
            'main' => 1,
            'active' => 1,
            'state' => 'OK'
        ]));

        $shop->store()->save(new Store(['category_shop_id' => '26']));

        $plan = Plan::find(isset($data['plan']) && !empty($data['plan']) ? $data['plan'] : 1);

        if (!$plan)
            abort(404);

        $shop->newSubscription($plan);

        return $user;
    }
}
