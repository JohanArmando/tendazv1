<?php

namespace Tendaz\Http\Controllers\Tendaz;

use Illuminate\Support\Str;
use Tendaz\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Tendaz\Http\Requests;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;

class ResetPasswordController extends Controller
{
    use ResetsPasswords;

    protected $redirectTo = 'login';
    protected $path = '';
    protected $loginView = '';

    public function __construct()
    {
        $this->path = env('DB_DATABASE');
        $this->loginView = "$this->path.passwords.reset";
    }

    public function showResetForm(Request $request, $token = null)
    {
        return view($this->loginView)->with(
            ['token' => $token, 'email' => $request->email]
        );
    }

    public function broker()
    {
        return Password::broker('admins');
    }

    protected function resetPassword($user, $password)
    {

        $user->forceFill([
            'password' => $password,
            'remember_token' => Str::random(60),
        ])->save();

        $this->guard()->login($user);
    }

    protected function guard()
    {
        return Auth::guard('admins');
    }
}
