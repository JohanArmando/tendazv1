<?php

namespace Tendaz\Http\Controllers\Tendaz;

use Tendaz\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use Tendaz\Http\Requests;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{
    use SendsPasswordResetEmails;
    
    protected $linkRequestView = 'administrator.passwords.email';
    protected $guard = 'admins';
    
    public function __construct()
    {
        $this->middleware('guest:admins');
    }
    public function broker()
    {
        return Password::broker('admins');
    }
}
    