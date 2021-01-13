<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductList extends Model
{
    protected $table = 'productlists';

    public function shoplist()
    {
        return $this->belongsTo('App\ShopList');
    }
    public function ProductImages()
    {
        return $this->hasMany('App\ProductImage', 'product_id');
    }
}
