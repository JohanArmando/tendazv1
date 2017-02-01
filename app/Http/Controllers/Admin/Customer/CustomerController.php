<?php

namespace Tendaz\Http\Controllers\Admin\Customer;

use Illuminate\Http\Request;
use Tendaz\Http\Controllers\Controller;
use Tendaz\Models\Address\Address;
use Tendaz\Models\Address\CustomerAddress;
use Tendaz\Models\Customer;
use Tendaz\Models\Geo\City;
use Tendaz\Models\Geo\Country;
use Tendaz\Models\Geo\State;
use Tendaz\Models\Order\Order;
use Tendaz\Models\User;
use Tendaz\Models\Order\Consult;
use Tendaz\Repositories\CustomerRepository;
use Webpatser\Uuid\Uuid;


class CustomerController extends Controller
{

    private $customerRepository;

    /**
     * CustomerController constructor.
     * @param CustomerRepository $customerRepository
     */
    public function __construct(CustomerRepository $customerRepository)
    {
        $this->customerRepository = $customerRepository;
    }

    public function index()
    {
        $customers = $this->customerRepository->getLatestCustomers();
        return view('admin.customer.index',compact('customers'));
    }

    public function show($subdomain , Customer $customer)
    {
        $address = $customer->addressesForShipping->first();
        $orders = $customer->orders()->NotInitOrders()->paginate(10);
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
        $customer->shipping()->attach($address->id , ['isPrimary' => 1]);
        return redirect()->to('admin/customers')->with('message',array('type' => 'success' , 'message' => 'Usuario creado de forma correcta'));
    }

    public function export()
    {
        return view('admin.customer.export');
    }

    public function update($subdomain , Customer $customer , Request $request)
    {
        $customer->update(['avatar'=> $request->file('avatar')]);
        $customer->update($request->all());
        if($request->has('shipping'))
            if(!$request->shipping[0]['country_id'] == '' && !$request->shipping[0]['state_id'] == ''){
                $customerAddress = CustomerAddress::where('customer_id',$customer->id)->first();
                if(empty($customerAddress)){
                    $newAddress = Address::create($request->shipping[0]);
                    CustomerAddress::create(['customer_id' => $customer->id , 'address_id' => $newAddress->id]);
                }else {
                    $address = Address::where('id', $customerAddress->address_id)->first();
                    $address->update($request->shipping[0]);
                }
            }else{
                return redirect()->back()->with('message' , ['type' => 'warning' , 'message' => 'La direccion debe tener Estado y Ciudad.']);
            }

        return redirect()->back()->with('message' , ['type' => 'info' , 'message' => 'Enhorabuena!. Perfil actualizado.']);
    }

    public function edit($sudomain , Customer $customer)
    {
        $address = $customer->addressesForShipping->first();
        $countries = Country::pluck('name' , 'id');
        $states = State::where('country_id' , 50)->pluck('name' , 'id');
        return view('admin.customer.edit' , compact('customer' , 'states' , 'countries','address'));
    }

    public function contact()
    {
        $contacts = Consult::orderBy('created_at','DESC')->get();
        return view('admin.customer.contact',compact('contacts'));
    }
    public function postExport($subdomain , Request $request){
        $so = !empty($request->get('so')) && $request->get('so') == 'Mac' ? $so = 'csv' : $so = 'xls';
        $customers = Customer::all();
        \Excel::create("$subdomain.clientes", function($excel) use($customers) {
            $excel->setTitle('Listado  de clientes : ');
            $excel->sheet('Sheetname', function($sheet) use($customers) {
                $rows = array();
                foreach ($customers as $customer) {
                    $rows[] = array(
                        'Nombre'                    => $customer->name,
                        'Apellido'                  => $customer->last_name,
                        'Telefono'                  => $customer->phone,
                        'Correo'                    => $customer->email,
                        'Identificacion'            => $customer->identification,
                        'Notas'                     => $customer->notes
                    );
                }
                $sheet->fromArray($customers);

            });
        })->store($so,'exports');
        return response()->json(['path' => url('/').'/exports/clientes.'.$so]);
    }

}
