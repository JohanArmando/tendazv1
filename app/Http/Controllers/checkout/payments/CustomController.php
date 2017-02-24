<?php

namespace Tendaz\Http\Controllers\checkout\payments;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;
use Tendaz\Http\Requests;
use Tendaz\Http\Controllers\Controller;
use Tendaz\url\DomainStore;

class CustomController extends Controller
{

    public function __construct()
    {
        $this->store = DomainStore::getShop();
    }

    public function confirmation(Request $request)
    {
        $email = Session::get($this->store->id.'address-checkout')['cart']['contact']['email'];
        $status = Session::has($this->store->id.'custom_status' ) ? Session::get($this->store->id.'custom_status' ) :'rejected';
        return view('checkout.finished' , compact('email' , 'status'));
    }
}
