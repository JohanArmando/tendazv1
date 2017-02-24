<?php

namespace Tendaz\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Tendaz\Models\Domain\Domain;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Tendaz\Http\Controllers\Controller;
use Tendaz\Http\Requests;
use Symfony\Component\HttpFoundation\Request;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    
    public function logout()
    {
        auth('admins')->logout();
        return redirect(env('APP_URL'));
    }

}
