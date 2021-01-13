<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderHistory extends Model
{
    protected $table = 'orderhistorys';
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
