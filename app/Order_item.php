<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Moloquent;

class Order_item extends Moloquent
{
    protected $fillable = [
        'price',
        'quantity',
        'name',
        'image',

    ];

    public function order()
    {
        return $this->belongsTo('App\Order');
    }

    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
