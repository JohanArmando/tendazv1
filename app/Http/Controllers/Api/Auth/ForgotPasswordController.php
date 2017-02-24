<?php

namespace Tendaz\Http\Controllers\Api\Auth;

use igaster\laravelTheme\Facades\Theme;
use Illuminate\Http\Request;
use Tendaz\Http\Controllers\Controller;
use Illuminate\Support\Facades\Password;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Tendaz\Models\Customer;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controllers
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showLinkRequestForm()
    {
        return view(Theme::current()->viewsPath.".password.email");
    }

    public function sendResetLinkEmail(Request $request)
    {
        $this->validate($request, ['email' => 'required|email']);

        $response = $this->broker()->sendResetLink(
            $request->only('email')
        );

        if ($response === Password::RESET_LINK_SENT) {
            return response(['status'  => trans($response)]);
        }

        return response(['email' => trans($response)] , 404);
    }

    public function getUser($credentials)
    {
        Customer::where('email' , $credentials['email']);
    }

    public function broker()
    {
        return Password::broker();
    }
}
