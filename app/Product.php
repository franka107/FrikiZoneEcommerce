<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Moloquent;

class Product extends Moloquent
{
    protected $fillable = [

        'name',
        'sku',
        'description',
        'price',
        'img',
        
    ];

}
