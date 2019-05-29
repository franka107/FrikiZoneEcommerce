<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Moloquent;

class Comment extends Moloquent
{
    //
    protected $fillable = [
        'id_user',
        'content',
        //posted_at

    ];
}
