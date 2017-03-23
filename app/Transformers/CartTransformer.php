<?php
/**
 * Created by PhpStorm.
 * User: johins
 * Date: 8/12/16
 * Time: 01:27 PM
 */

namespace Tendaz\Transformers;

use Tendaz\Models\Address\Address;
use Tendaz\Models\Cart\Cart;
use League\Fractal\TransformerAbstract;
use Tendaz\Models\Customer;
use Tendaz\Models\Shipping\ShippingMethod;

class CartTransformer extends  TransformerAbstract
{

    private $token;

    public function __construct($access_token = null)
    {
        $this->token = $access_token;
    }

    protected $defaultIncludes = [
        'products' , 'customer' , 'shippingAddress' , 'order' , 'shippingMethod' , 'coupon' , 'shop' , 'paymentPreferences' ,'paymentsMethods'
    ];

    public function transform(Cart $cart)
    {
            return [
                '_id'                   => $cart->secure_key,
            'created'               => $cart->created_at->format('Y-m-d H:m:s'),
            'original_qty'          => $cart->productsSize(),
            'original_total'        => $cart->total(),
            'order_id'              => $cart->order->uuid,
            'totalizers'            => [
                'items'  => [ 'id' => 'items' , 'name' => 'Total De Los Items' , 'value' => $cart->totalProducts()],
                'shipping'  => [ 'id' => 'Shipping' , 'name' => 'Costo total del envío' , 'value' => $cart->totalShipping()],
                'discounts'  => [ 'id' => 'Discount' , 'name' => 'Total del descuento' , 'value' => $cart->totalDiscount()],
                // tax => [ 'id' => 'taxing' , 'name' => 'Costo total del envío' , 'value' => $cart->totalDiscount()
                //hay que agregar columna total descuento por payment total_discount_payment
                //shipping_tax
            ]
        ];
    }

    public function includeProducts(Cart $cart){
        $products = $cart->products;
        return $this->collection($products, new  ProductTransformer());
    }

    public function includePaymentsMethods(Cart $cart){;
        return $cart->shop->payments_methods ?
            $this->collection($cart->shop->payments_methods, new  PaymentValueTransformer())
            : $this->null();
    }

    public function includeCustomer(Cart $cart){
        $customer = $cart->customer ? $cart->customer : new Customer;
        return $this->item($customer, new  CustomerTransformer());
    }

    public function includeShippingAddress(Cart $cart){
        $address = $cart->order->shippingAddress ? $cart->order->shippingAddress->address : new Address;
        return $this->item($address, new  AddressTransformer());
    }

    public function includeShippingMethod(Cart $cart){
        $shippingMethod = $cart->order->shippingMethod ? $cart->order->shippingMethod : new ShippingMethod;
        return $this->item($shippingMethod, new  ShippingMethodTransformer());
    }

    public function includeOrder(Cart $cart){
        $order = $cart->order;
        return $this->item($order, new  OrderTransformer());
    }

    public function includeCoupon(Cart $cart){
        return $cart->coupon ?
                $this->item($cart->coupon, new  CouponTransformer())
            : $this->null();
    }

    public function includeShop(Cart $cart){
        return $cart->shop ?
                $this->item($cart->shop, new  ShopTransformer())
            : $this->null();
    }

    public function includePaymentPreferences(Cart $cart){
        return $cart->order->payment ?
                $this->item($cart->order->payment, new  PaymentValueTransformer($this->token))
            : $this->null();
    }

}
