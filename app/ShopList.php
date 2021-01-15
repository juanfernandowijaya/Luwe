<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShopList extends Model
{
    protected $table = 'shoplists';
    public function ProductLists()
    {
        return $this->hasMany('App\ProductList', 'shop_id');
    }
    public function OrderHistorys()
    {
        return $this->hasMany('App\OrderHistory');
    }
}
