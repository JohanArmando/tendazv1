<?php
/**
 * Created by PhpStorm.
 * User: johins
 * Date: 1/11/16
 * Time: 06:32 PM
 */

namespace Tendaz\Traits;


use Illuminate\Support\Facades\Cache;
use Tendaz\Models\Domain\Domain;
use Illuminate\Http\Request;

trait CacheTagsTrait
{

    /**
     * @param $depKey
     * @param $sql
     * @param int $timeout
     * @return mixed
     */
    public static  function cacheTags($depKey, $sql, $timeout = 1440) {
        return Cache::tags([ self::getTagSubdomain(), self::getTagName()])->remember($depKey, $timeout, function() use($sql) {
            return $sql;
        });
    }

    /**
     * Get the name of the column for applying the scope.
     *
     * @return string
     */
    public static  function getTagName()
    {
        return defined('static::TAG') ? static::TAG : 'home';
    }

    /**
     * Get the name of the column for applying the scope.
     *
     * @return string
     */
    public static  function getTagSubdomain()
    {
        return Domain::getSubdomain();
    }

}