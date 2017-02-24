<?php
/**
 * Created by PhpStorm.
 * User: johins
 * Date: 24/10/16
 * Time: 03:17 PM
 */

namespace Tendaz\Helpers;


use Tendaz\Models\Store\Shop;

class CleanString
{
    public static function cleanName($name_store){
        $name = self::limpiarString($name_store);
        return strtolower($name);
    }

    public static function limpiarString($texto){
        $textoLimpio = preg_replace('([^A-Za-z0-9])', '', $texto);
        return $textoLimpio;
    }
}