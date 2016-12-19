<?php
/**
 * Created by PhpStorm.
 * User: johins
 * Date: 5/12/16
 * Time: 05:48 PM
 */

namespace Tendaz\Transformers;


use League\Fractal\TransformerAbstract;
use Tendaz\Models\Categories\Category;

class CategoryTransformer extends TransformerAbstract
{
    public function transform(Category $category)
    {
        return [
            '_id'       => $category->uuid,
            'name'      => $category->name,
            'slug'      => $category->slug,
            'children'  => $this->nested($category)
        ];
    }

    public function nested($category)
    {
        $category = (object) $category;
        $data = array();
         if (isset($category->children) && count($category->children)) {
            foreach ($category->children as $child){
                array_push($data ,   [
                    '_id'       => $child->uuid,
                    'name'      => $child->name,
                    'slug'      => $child->slug,
                    'children'  => $this->nested($child)
                ]);
            }
             return $data;
         }
         return null;
    }
}