<?php

namespace Tendaz\Http\Controllers\Tendaz;

use Tendaz\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Tendaz\Http\Requests;
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

    protected function guard()
    {
        return Auth::guard('admins');
    }
}
