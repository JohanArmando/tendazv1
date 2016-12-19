<?php

namespace Tendaz\Http\Controllers\checkout\payments;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;
use PhpSpec\Exception\Exception;
use Tendaz\APIS\Payu;
use Tendaz\Http\Requests;
use Tendaz\Http\Controllers\Controller;
use Tendaz\Order;
use Tendaz\url\DomainStore;

class PayuController extends Controller
{
    public function __construct()
    {
        $this->store = DomainStore::getShop();
    }

    public function response(Request $request)
    {

        $array = $request->all();
        foreach ($array as $key => $item){
            $array[$key.'_payu'] = $array[$key];
            unset($array[$key]);
        }
        $ApiKey = session($this->store.'payu_key');
        $merchant_id = $request->merchantId;
        $referenceCode = $request->referenceCode;
        $TX_VALUE = $request->TX_VALUE;
        $New_value = number_format($TX_VALUE , 1 , '.' , '');
        $currency = $request->currency;
        $transactionState = $request->transactionState;
        $firma_cadena = "$ApiKey~$merchant_id~$referenceCode~$New_value~$currency~$transactionState";
        $firmacreada = md5($firma_cadena);
        $firma = $request->signature;
        if($firmacreada !== $firma){
            throw  new Exception ("Lo siento las firmas no coinciden.");
        }
        $order = Order::where('signature' , md5("$ApiKey~$merchant_id~$referenceCode~$New_value~$currency"))->first();

        if ($_REQUEST['transactionState'] == 4 ) {
            $estadoTx['name'] = "approved";
            $estadoTx['id'] = 1;
        }

        else if ($_REQUEST['transactionState'] == 6 ) {
            $estadoTx['name'] = "rejected";
            $estadoTx['id'] = 11;
        }

        else if ($_REQUEST['transactionState'] == 104 ) {
            $estadoTx['name'] = "rejected";
            $estadoTx['id'] = 11;
        }

        else if ($_REQUEST['transactionState'] == 7 ) {
            $estadoTx['name'] = "pending";
            $estadoTx['id'] = 11;
        }

        else {
            $estadoTx=$_REQUEST['mensaje'];
        }
        $array['order_status_id'] =  $estadoTx['id'];
        $order->update(
            $array
        );
        $email = Session::get($this->store->id.'address-checkout')['cart']['contact']['email'];
        $status = $estadoTx['name'];
        return view('checkout.finished' , compact('email' , 'status'));
    }

    public function confirmation(Request $request)
    {
        $array = $request->all();
        foreach ($array as $key => $item){
            $array[$key.'_payu'] = $array[$key];
            unset($array[$key]);
        }
        $ApiKey = session($this->store.'payu_key');
        $merchant_id = $request->merchantId;
        $referenceCode = $request->reference_sale;
        $TX_VALUE = $request->TX_VALUE;
        $New_value = number_format($TX_VALUE , 1 , '.' , '');
        $currency = $request->currency;
        $transactionState = $request->state_pol;
        $firma_cadena = "$ApiKey~$merchant_id~$referenceCode~$New_value~$currency~$transactionState";
        $firmacreada = md5($firma_cadena);
        $firma = $request->signature;
        if($firmacreada !== $firma){
            throw  new Exception ("Lo siento las firmas no coinciden.");
        }
        $order = Order::where('signature' , md5("$ApiKey~$merchant_id~$referenceCode~$New_value~$currency"))->first();

        if ($_REQUEST['transactionState'] == 4 ) {
            $estadoTx['name'] = "approved";
            $estadoTx['id'] = 1;
        }

        else if ($_REQUEST['transactionState'] == 6 ) {
            $estadoTx['name'] = "rejected";
            $estadoTx['id'] = 11;
        }

        else if ($_REQUEST['transactionState'] == 104 ) {
            $estadoTx['name'] = "rejected";
            $estadoTx['id'] = 11;
        }

        else if ($_REQUEST['transactionState'] == 7 ) {
            $estadoTx['name'] = "pending";
            $estadoTx['id'] = 11;
        }

        else {
            $estadoTx=$_REQUEST['mensaje'];
        }
        $array['order_status_id'] =  $estadoTx['id'];
        $order->update(
            $array
        );
        header("HTTP/1.1 200 OK");
    }
}
