<?php

namespace Tendaz\Http\Controllers\Admin\Customer;

use Illuminate\Http\Request;
use Tendaz\Http\Controllers\Controller;
use Tendaz\Models\Customer;
use Tendaz\Models\User;
use Tendaz\Models\Order\Consult;


class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::orderBy('id' , 'DESC')->with('latestOrder' , 'eagerTotal')->get();
        return view('admin.customer.index',compact('customers'));
    }
    public function show($subdomain , Customer $customer)
    {
        $address = $customer->addressesForShipping->first();
        $orders = $customer->orders()->paginate(10);
        return view('admin.customer.show' , ['customer' => $customer , 'address' => $address , 'orders' => $orders]);
    }

    public function create()
    {
        return view('admin.customer.create');
    }

    public function store(Request $request)
    {
        Customer::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => ($request->has('phone')) ? $request->get('phone') : '',
            'identification' => ($request->has('cedula')) ? $request->get('cedula') : '',
            'password' => $request->get('password'),
            'notes' => ($request->has('notes')) ? $request->get('notes') : ''
        ]);
        /*$address = Address::create([
            'address_name' => $request->get('address_name'),
            'address' => $request->get('address'),
            'city' => $request->get('city'),
            'country' => $request->get('country'),
            'user_id' => $users->id,
            'principal' => 1,
        ]);*/
        return redirect()->to('admin/customers')->with('message',array('type' => 'success' , 'message' => 'Usuario creado de forma correcta'));
    }

    public function export()
    {
        return view('admin.customer.export');
    }

    public function update($subdomain , Customer $customer , Request $request)
    {
        dd($request->all());
        $customer->update($request->all());
        return redirect()->back()->with('message' , ['type' => 'info' , 'message' => 'Enhorabuena!. Perfil actualizado.']);
    }

    public function edit($sudomain , Customer $customer)
    {
        return view('admin.customer.edit' , compact('customer'));
    }

    public function contact()
    {
        $contacts = Consult::orderBy('created_at','DESC')->get();
        return view('admin.customer.contact',compact('contacts'));
    }

}
