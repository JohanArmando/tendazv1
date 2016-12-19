<?php
/**
 * Created by PhpStorm.
 * User: johins
 * Date: 29/11/16
 * Time: 10:47 PM
 */

namespace Tendaz\Traits;


use Tendaz\Scopes\WhereShopScope;

trait WhereShopTrait
{

    /**
     * Boot the scope.
     *
     * @return void
     */
    public static function bootWhereShopTrait()
    {
        static::addGlobalScope(new WhereShopScope);
    }
    /**
     * Get the name of the column for applying the scope.
     *
     * @return string
     */
    public function getShopIdColumn()
    {
        return defined('static::SHOP_ID_COLUMN') ? static::SHOP_ID_COLUMN : 'shop_id';
    }

    /**
     * Get the name of the column for applying the scope.
     *
     * @return string
     */
    
    /**
     * Get the fully qualified column name for applying the scope.
     *
     * @return string
     */
    public function getQualifiedWhereShopColumn()
    {
        
        return $this->getTable().'.'.$this->getShopIdColumn();
    }
    /**
     * Get the query builder without the scope applied.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public static function withDrafts()
    {
        return with(new static)->newQueryWithoutScope(new WhereShopScope);
    }
}