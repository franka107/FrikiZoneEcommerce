<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Moloquent;

class Order extends Moloquent
{
    protected $fillable = [

     //sku,qty,unit_price,total_price
        
    ];

    public function products()
    {
        return $this->embedsMany('App\Product');
    }

    public function user()
    {
        return $this->embedsOne('App\User');
    }
}
