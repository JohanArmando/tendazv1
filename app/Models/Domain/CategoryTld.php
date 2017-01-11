<?php

namespace Tendaz\Models\Domain;

use Illuminate\Database\Eloquent\Model;
use Tendaz\Traits\UuidAndShopTrait;

class CategoryTld extends Model
{
    use UuidAndShopTrait;
    /**
     * @param array $attributes
     * @throws \Exception
     */

    protected $fillable = ['name' , 'uuid'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tlds(){
        return $this->hasMany(Tld::class);
    }
}
