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
            'order'  => $order->created_at->format('Y-m-d H:m:s'),
            'total'  => $order->total,
            'users'  => $order->user,
            'client' => [
                'first_name'     => $order->name,
                'last_name'      => $order->last_name,
                'phone'          => $order->phone,
                'identification' => $order->identification,
            ],
            'status' => [ 'name' => $order->status->name, 'id' => $order->order_status]
        ];
    }
}