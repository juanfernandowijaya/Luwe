<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    protected $table = 'productimages';
    public function productlist()
    {
        return $this->belongsTo('App\ProductList');
    }
}
