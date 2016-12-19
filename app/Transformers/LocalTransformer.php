<?php
/**
 * Created by PhpStorm.
 * User: johins
 * Date: 15/12/16
 * Time: 07:05 PM
 */

namespace Tendaz\Transformers;


use League\Fractal\TransformerAbstract;
use Tendaz\Models\Send\Local;

class LocalTransformer extends TransformerAbstract
{
    public function transform(Local $local)
    {
        return [
            '_id' => $local->uuid,
            'principal' => $local->principal,
            'name' => $local->name,
            'description' => $local->description,
        ];
    }
}