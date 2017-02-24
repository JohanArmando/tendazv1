<?php
/**
 * Created by PhpStorm.
 * User: johins
 * Date: 27/10/16
 * Time: 11:36 PM
 */

namespace Tendaz\Transformers;


use League\Fractal\TransformerAbstract;
use Tendaz\Models\Images\Image;

class ImageTransformer extends TransformerAbstract
{
    public function transform(Image $image)
    {
        return [
            'id'    => $image->id,
            'url'   => $image->url,
        ];
    }
}