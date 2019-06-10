<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Moloquent;

class Category extends Moloquent
{
    //
    protected $fillable = [
        'name',
        'slug',
        'description',
        'color',
    ];

 
    public function products()
    {
        $this->hasMany('App\Product');
    }

}
