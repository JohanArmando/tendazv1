<?php

namespace Tendaz\Http\Controllers\Auth;

use igaster\laravelTheme\Facades\Theme;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Tendaz\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controllers
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    public  $redirectTo = '/';

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function reset(Request $request)
    {

        $this->validate($request, $this->rules(), $this->validationErrorMessages());
        $response = $this->broker()->reset(
            $this->credentials($request), function ($user, $password) {
                $this->resetPassword($user, $password);
            }
        );

        return $response == Password::PASSWORD_RESET
            ? $this->sendResetResponse($response)
            : $this->sendResetFailedResponse($request, $response);
    }

   protected function guard()
   {
       return Auth::guard('web');
   }

    public function broker()
    {
        return Password::broker('users');
    }

    protected function resetPassword($user, $password)
    {

        $user->forceFill([
            'password' => $password,
            'remember_token' => Str::random(60),
        ])->save();

    }

    public function showResetForm(Request $request, $subdomain , $token = null)
    {
        return view(Theme::current()->viewsPath.".password.reset")->with(
            ['token' => $token, 'email' => $request->email]
        );
    }

}
