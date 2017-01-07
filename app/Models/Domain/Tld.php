<?php

namespace Tendaz\Models\Domain;

use Illuminate\Database\Eloquent\Model;
use Tendaz\Traits\UuidAndShopTrait;

class Tld extends Model
{
    use UuidAndShopTrait;

    /**
     * @var array
     */
    protected $fillable = ['uuid' , 'name' , 'price' , 'category_tld_id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function categorie(){
        return $this->belongsTo(CategoryTld::class);
    }
}
