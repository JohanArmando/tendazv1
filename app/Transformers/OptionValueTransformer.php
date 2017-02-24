<?php
/**
 * Created by PhpStorm.
 * User: johins
 * Date: 24/11/16
 * Time: 12:00 PM
 */

namespace Tendaz\Transformers;


use League\Fractal\TransformerAbstract;
use Tendaz\Models\Products\OptionValue;
use Tendaz\Models\Products\OptionValueVariant;

class OptionValueTransformer extends TransformerAbstract
{
    public function transform(OptionValue $value)
    {
        return [
            'property'  => $value->option->name,
            'value'     => $value->name
        ];
    }
}