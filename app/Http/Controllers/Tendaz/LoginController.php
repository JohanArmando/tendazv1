<?php

namespace Tendaz\Http\Controllers\Tendaz;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Tendaz\Models\Domain\Domain;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Tendaz\Http\Controllers\Controller;
use Tendaz\Http\Requests;
use Symfony\Component\HttpFoundation\Request;

class LoginController extends Controller
{
    use AuthenticatesUsers;


    protected $loginView = "";
    protected $guard = 'admins';

    public function __construct()
    {
        $this->middleware('guest:admins');
        $this->path = env('DB_DATABASE');
        $this->loginView = "$this->path.login";
    }

    /**
     * Show the application's login form.
     *
     * @return \Illuminate\Http\Response
     */
  
    public function showLoginForm()
    {
        $view =  property_exists($this , 'loginView') ?
            $this->loginView : 'auth.register';
        if (View::exists($view)) {
            return view($view);
        }
        return view('auth.login');
    }

    public function authenticated(Request $request, $user){
        return redirect(Domain::DomainByUser()."/admin/");
    }

    public function logout()
    {
        auth('admins')->logout();
        return redirect(env('APP_URL'));
    }

    protected function guard()
    {
        $guard =  property_exists($this , 'guard') ?
            $this->guard : 'web';
        return Auth::guard($guard);
    }

}
