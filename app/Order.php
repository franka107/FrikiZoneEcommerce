<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Moloquent;

class Order extends Moloquent
{
    protected $fillable = [

     'subtotal',
     'shipping',
     'status',
        
    ];

    public function order_items()
    {
        return $this->embedsMany('App\Order_item');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
