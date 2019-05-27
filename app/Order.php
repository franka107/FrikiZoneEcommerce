<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Moloquent;

class Order extends Moloquent
{
    protected $fillable = [

        //id
        'user_id',
        'products', //sku,qty,unit_price,total_price
        
    ];
}
