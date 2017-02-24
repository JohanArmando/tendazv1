<?php
/**
 * Created by PhpStorm.
 * User: johins
 * Date: 1/11/16
 * Time: 04:40 PM
 */

namespace Tendaz\Scopes;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Scope;
use Tendaz\Models\Domain\Domain;

class WhereShopScope implements Scope
{

    /**
     * @return if exists proprty shop is used in API
     */
    public function getShopID()
    {
        return property_exists(Domain::class , "SHOP_ID") && ! empty(Domain::$SHOP_ID) ? Domain::$SHOP_ID : Domain::ShopByDomain()->id;
    }

    /**
     * Apply scope on the query.
     *
     * @param \Illuminate\Database\Eloquent\Builder  $builder
     * @param \Illuminate\Database\Eloquent\Model  $model
     * @return void
     */
    public function apply(Builder $builder, Model $model)
    {
        $column = $model->getQualifiedWhereShopColumn();
        $builder->where($column, '=', $this->getShopID())->orWhereNull($column);
        $this->addWithDrafts($builder);
    }
    /**
     * Remove scope from the query.
     *
     * @param \Illuminate\Database\Eloquent\Builder  $builder
     * @param \Illuminate\Database\Eloquent\Model  $model
     * @return void
     */
    public function remove(Builder $builder, Model $model)
    {
        $query = $builder->getQuery();
        $column = $model->getQualifiedWhereShopColumn();
        $bindingKey = 0;
        foreach ((array) $query->wheres as $key => $where)
        {
            if ($this->isShopIdConstraint($where, $column))
            {
                $this->removeWhere($query, $key);
                // Here SoftDeletingScope simply removes the where
                // but since we use Basic where (not Null type)
                // we need to get rid of the binding as well
                $this->removeBinding($query, $bindingKey);
            }
            // Check if where is either NULL or NOT NULL type,
            // if that's the case, don't increment the key
            // since there is no binding for these types
            if ( ! in_array($where['type'], ['Null', 'NotNull'])) $bindingKey++;
        }
    }
    /**
     * Remove scope constraint from the query.
     *
     * @param  \Illuminate\Database\Query\Builder  $builder
     * @param  int  $key
     * @return void
     */
    protected function removeWhere(BaseBuilder $query, $key)
    {
        unset($query->wheres[$key]);
        $query->wheres = array_values($query->wheres);
    }
    /**
     * Remove scope constraint from the query.
     *
     * @param  \Illuminate\Database\Query\Builder  $builder
     * @param  int  $key
     * @return void
     */
    protected function removeBinding(BaseBuilder $query, $key)
    {
        $bindings = $query->getRawBindings()['where'];
        unset($bindings[$key]);
        $query->setBindings($bindings);
    }
    /**
     * Check if given where is the scope constraint.
     *
     * @param  array   $where
     * @param  string  $column
     * @return boolean
     */
    protected function isShopIdConstraint(array $where, $column)
    {
        return ($where['type'] == 'Basic' && $where['column'] == $column && $where['value'] == Domain::ShopByDomain());
    }
    /**
     * Extend Builder with custom method.
     *
     * @param \Illuminate\Database\Eloquent\Builder  $builder
     */
    protected function addWithDrafts(Builder $builder)
    {
        $builder->macro('withDrafts', function(Builder $builder)
        {
            $this->remove($builder, $builder->getModel());
            return $builder;
        });
    }
}