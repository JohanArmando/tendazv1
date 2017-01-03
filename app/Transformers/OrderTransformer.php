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
    public function transform(Order $order)
    {
        return [
            'id'     => $order->id,
            'order'  => $order->created_atN,
            'total'  => $order->total,
            'users'  => $order->user,
            'client' => [
                'first_name'     => $order->user && !$order->name ? $order->user->name : $order->name,
                'last_name'      => $order->user && !$order->last_name  ? $order->user->last_name : $order->last_name,
                'phone'          => $order->user && !$order->phone ? $order->user->phone : $order->phone,
                'identification' => $order->user && !$order->identification ? $order->user->identification : $order->identification,
            ],
            'status' => [ 'name' => $order->status->name, 'id' => $order->order_status]
        ];
    }
}