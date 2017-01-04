<?php

namespace Tendaz\Http\Controllers\Api\Auth;

use Illuminate\Http\Request;
use Tendaz\Http\Controllers\Controller;
use Tendaz\Models\Address\Address;
use Tendaz\Models\Customer;
use Tendaz\Transformers\AddressTransformer;

class AddressesController extends Controller
{
    public function response(Customer $customer)
    {
        return fractal()->collection($customer->addresses()->orderBy('isPrimary' , 'DESC')->get() , new AddressTransformer())->withResourceName('addresses');
    }

    public function index(Customer $customer)
    {
        return $this->response($customer);
    } 
    
    public function store(Customer $customer , Request $request)
    {
        foreach ($customer->addresses as $address){
            $address->pivot->isPrimary = 0;
            $address->pivot->save();
        }

        $customer->addresses()->create($request->except(['client_secret' , 'client_id']) , ['isPrimary' => 1]);
        return $this->response($customer);
    }

    public function show(Customer $customer , Address $address)
    {
        return fractal()->item($customer->addresses()->where('address_id' , $address->id)->first() , new AddressTransformer());
    }

    public function update(Customer $customer , Address $address , Request $request)
    {
        $address = $customer->addresses()
            ->where('address_id' , $address->id)
            ->first();

        $address->addressHistory()->create($address->getAttributes());

        $address->update($request->except(['client_secret' , 'client_id']));

        //la validacion es si tiene historia muestra la ultima
        //de aquellas que su fecha de creacion e ssuperior a la de la orden asociada

        return $this->response($customer);
    }

    public function destroy(Customer $customer , Address $address)
    {
        $customer->addresses()
            ->where('address_id' , $address->id)
            ->first()->delete();

        return $this->response($customer);
    }

    public function main(Customer $customer , Address $address)
    {
        foreach ($customer->addresses as $address){
            $address->pivot->isPrimary = 0;
            $address->pivot->save();
        }

        //revisar metodos estaicos scope y normales.revisar eventos loquen cuando se cumple una condicion
       $customer->addresses()
            ->where('address_id' , $address->id)
            ->first()->pivot->update([
               'isPrimary' => 1
           ]);

        return $this->response($customer);
    }
}
