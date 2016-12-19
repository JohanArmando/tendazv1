<?php

namespace Tendaz\Http\Controllers\checkout;

use Tendaz\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Tendaz\Models\Country;
use Tendaz\Models\Customer;
use Tendaz\Models\Order\Order;

;

class CheckoutController extends Controller
{

    /**
     * CheckoutController constructor.
     */
    public function __construct()
    {
        //$response = new DomainStore();
        //$this->store = $response->getStore();
    }
    function toObject($array) {
        $obj = new \stdClass();
        foreach ($array as $key => $val) {
            $obj->$key = is_array($val) ? (object)$val : $val;
        }
        return $obj;
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function addressAndLogin($subdomain ,$order){
        $addressShipping = Customer::addressShipping();
        $addressBilling = Customer::addressBilling();
        $user = Customer::findOrCreateUser();
        $countries = Country::lists('name' , 'iso');
        //$lastAddress = $this->addresses($addressShipping);
        $lastAddress = [];
        $locals = [];
        return view('checkout.address' , [
                'addressShipping' => $addressShipping ,
                'addressBilling' => $addressBilling ,
                'users' => $user ,
                'countries' => $countries ,
                'lastAddress' => $lastAddress,
                'locals'     => $locals]
        );
   }

   /* /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    /*
    public function addressAndLoginPost(Requests\AddressAndContactCheckoutRequest $request){
        $request = $request->all();
        if($request['cart']['shipping_type'] == 'pickup'){
            $request['cart']['pickup']['local'] = Local::find($request['cart']['pickup']['branch']);
        }
        Session::put($this->store->id.'address-checkout' , $request);
        return redirect("checkout/payment_and_shipping/".$this->store->id);
    }
    */
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    /*
    public function paymentAndShipping(){
        $sends = Send::optionsByCart()->get();
        $payments = count($this->store->payments) > 0 ? $this->store->payments : $this->toObject(array('0' =>  ['discount' => '0','name' => 'A convenir'  , 'id' => '0' , 'pivot' => ['id' => '0' ,
            'payment_form' => 'A convenir' ,
            'discount' => '0' ,
            'description' => 'Cuando termines la compra, vas a ver la información de pago.']
        ]));
        $local = Session::get($this->store->id.'address-checkout')['cart']['shipping_type'];
        if(Send::count() > 0 && count($sends) == 0){
            $message = ['type' => 'danger' , 'message' => 'No hay opciones de envío disponibles para esta dirección.'];
            return back()->with('message' , $message);
        }else{
            $sends = Send::count() != 0 ? $sends : (object) array('0' => (object) ['name' => 'Nos comunicaremos para coordinar la entrega del producto' , 'cost' => '0' , 'id' => '0']);
            return view('checkout.payment_and_send' , compact('payments' , 'sends' ,'local'));
        }
    }
*/
    /**
     * @param Request $request
     */
    /*
    public function paymentAndShippingPost(Requests\ValidatePaymentAndSendRequest $request){
        $this->addToSession($this->store , 'payment-checkout' , $request->except('_token'));
        $condintios = (object) $request->cart;
        CartTendaz::conditionsShipping($condintios);
        return redirect("checkout/confirmation/".$this->store->id);
    }
*/
    /*
    public function addToSession($store , $name ,  $request){
        Session::put($store.$name , $request);
    }
*/
   /*
    public function confirmationOrder(){
        $quantity = Cart::getTotalQuantity();
        $total = Cart::getTotal();
        $items = Cart::getContent();
        $payment = $this->toObject(Session::get($this->store.'payment-checkout'));
        $address = $this->toObject(Session::get($this->store->id.'address-checkout'));
      return view('checkout.confirmation' , compact('quantity' , 'total' , 'items' , 'address' , 'payment'));
    }
*/
    /*
    public function postConfirmationOrder(Request $request){
        switch ($request->payment_method){
            case "Mercadopago":
                    new Mercadopago();
                    $order = Order::createNewOrder($this->store);
                    return Mercadopago::generate($order);
                break;
            case "Payu":
                $order = Order::createNewOrder($this->store);
                $payu = new Payu($order);
                $order->signature = $payu->getSignature();
                $order->save();
                return $payu->generate();
                break;
            case "Personal":
                $order = Order::createNewOrder($this->store);
                Session::put($this->store->id.'custom_status' , $order ? 'approved' : 'rejected');
                return $order;
                break;
        }
    }
    */
    /**
     * @param $addresses
     * @return object|Address
     */
    /*
    public function addresses($addresses){
        $address_session = Session::get($this->store->id.'address-checkout');
        if($address_session){
            $address_session['cart']['shipping']['id_number'] = $address_session['cart']['billing']['id_number'];
            $address_session['cart']['shipping']['pickup'] = isset($address_session['cart']['shipping']['pickup']) ?  $address_session['cart']['pickup'] : [];
            return (object)  $address_session['cart']['shipping'];
        }else{
            if($addresses != ' '){
                return $addresses[count($addresses) - 1];
            }else{
                return new Address();
            }
        }
    }
    */
    /*
    public function updatePassword(Request $request){
        $users = User::findAndUpdatePassword($request->all());
        if($users)
            return back()->with('message' ,  ['type' => 'success' , 'message' => 'Enhorabuena, Usuario registrado correctamente']);
        else
            return back()->with('message' ,  ['type' => 'danger' , 'message' => 'Upps! . Hubo un problema al registrar el usuario']);
    }
*/
}
