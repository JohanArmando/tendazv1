<?php
/**
 * Created by PhpStorm.
 * User: johins
 * Date: 8/12/16
 * Time: 11:50 PM
 */

namespace Tendaz\Transformers;


use League\Fractal\TransformerAbstract;
use Tendaz\Models\Order\Order;

class OrderTransformer extends TransformerAbstract
{
    protected $defaultIncludes = [
        //total de envio  descuento total descuento
        'paymentMethod' , 'products' , 'shippingAddress'
    ];

    public function transform(Order $order)
    {
        return [
            '_id'     => $order->uuid,
            'id'      => $order->unique_id_by_shop,
            'date'  => $order->created_at,
            'status' => [ 'name' => $order->status->name, 'id' => $order->order_status , 'message' => $order->status->description ,'code' => $order->order_status < 11 ? 'Abierta' : 'Cancelada'],
            'status_payment' =>  !($order->order_status > 2) ? 'Pendiente' : 'Pagado',
            'status_shipping' =>  ! ($order->order_status > 6) ? 'No Enviado' : 'Enviado',
            'total'  => $order->total,
            'total_shipping' => $order->total_shipping,
            'total_discount' => $order->total_discount,
            'client' => [
                'first_name'     => $order->user && !$order->name ? $order->user->name : $order->name,
                'last_name'      => $order->user && !$order->last_name  ? $order->user->last_name : $order->last_name,
                'phone'          => $order->user && !$order->phone ? $order->user->phone : $order->phone,
                'identification' => $order->user && !$order->identification ? $order->user->identification : $order->identification,
            ],
        ];
    }

    public function includePaymentMethod(Order $order){
        return $order->payment ?
            $this->item($order->payment , new  PaymentValueTransformer())
            : $this->null();
    }

    public function includeProducts(Order $order){
        return $order->products ?
            $this->collection($order->products , new  ProductTransformer())
            : $this->null();
    }

    public function includeShippingAddress(Order $order){
        return $order->shippingAddress ?
            $this->item($order->shippingAddress->address , new  AddressTransformer())
            : $this->null();
    }
}