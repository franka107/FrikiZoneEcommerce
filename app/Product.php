<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Moloquent;

class Product extends Moloquent
{
    protected $fillable = [

        'name',
        'slug',
        'description',
        'extract',
        'price',
        'image',
        'visible'

    ];

    public function category()
    {
        $this->hasOne('App\Category');
    }

}
