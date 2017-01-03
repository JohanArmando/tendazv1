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

    protected $defaultIncludes = [
        'products' , 'customer' , 'shippingAddress' , 'order' , 'shippingMethod' , 'coupon' , 'shop'
    ];
    
    public function transform(Cart $cart)
    {
        return [
            '_id'                   => $cart->secure_key,
            'created'               => $cart->created_at->format('Y-m-d H:m:s'),
            'discount_applied'      => 'Pendiente para cuando creemos la tabla descuento carrito',
            'original_qty'          => $cart->productsSize(),
            'original_total'        => $cart->total(),
            'order_id'              => $cart->order->uuid,
            'totalizers'            => [
                'items'  => [ 'id' => 'items' , 'name' => 'Total De Los Items' , 'value' => $cart->totalProducts()],
                'shipping'  => [ 'id' => 'Shipping' , 'name' => 'Costo total del envío' , 'value' => $cart->totalShipping()],
              //  'Discounts'  => [ 'id' => 'Shipping' , 'name' => 'Costo total del envío' , 'value' => $cart->totalDiscount()],
            ]
        ];
    }

    public function includeProducts(Cart $cart){
        $products = $cart->products;
        return $this->collection($products, new  ProductTransformer());
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

}