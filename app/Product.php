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
        return $this->belongsTo('App\Category');
    }

    public function comments()
    {
        return $this->embedsMany('App\Comment');
    }

    public function order_item()
    {
        return $this->hasMany('App\Order-item');
    }


}
