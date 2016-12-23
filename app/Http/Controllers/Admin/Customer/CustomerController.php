<?php

namespace Tendaz\Http\Controllers\Admin\Customer;

use Illuminate\Http\Request;
use Tendaz\Http\Controllers\Controller;
use Tendaz\Models\Address\Address;
use Tendaz\Models\Customer;
use Tendaz\Models\Geo\City;
use Tendaz\Models\Geo\Country;
use Tendaz\Models\Geo\State;
use Tendaz\Models\User;
use Tendaz\Models\Order\Consult;
use Webpatser\Uuid\Uuid;


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
        $countries = Country::pluck('name' , 'id');
        $states = State::where('country_id' , 50)->pluck('name' , 'id');
        return view('admin.customer.create' , ['countries' => $countries , 'states' => $states]);
    }

    public function store(Request $request)
    {
        $customer = Customer::create($request->all());
        $address = Address::create($request->shipping[0]);
        $customer->shipping()->attach($address->id , ['isPrimary' => 1 , 'uuid' => Uuid::generate(4)->string]);
        return redirect()->to('admin/customers')->with('message',array('type' => 'success' , 'message' => 'Usuario creado de forma correcta'));
    }

    public function export()
    {
        return view('admin.customer.export');
    }

    public function update($subdomain , Customer $customer , Request $request)
    {
        $customer->update($request->all());
        $customer->shipping()->update($request->shipping[0]);
        return redirect()->back()->with('message' , ['type' => 'info' , 'message' => 'Enhorabuena!. Perfil actualizado.']);
    }

    public function edit($sudomain , Customer $customer)
    {

        $countries = Country::pluck('name' , 'id');
        $states = State::where('country_id' , 50)->pluck('name' , 'id');
        return view('admin.customer.edit' , compact('customer' , 'states' , 'countries'));
    }

    public function contact()
    {
        $contacts = Consult::orderBy('created_at','DESC')->get();
        return view('admin.customer.contact',compact('contacts'));
    }

}
