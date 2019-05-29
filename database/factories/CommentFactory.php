<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        //
        'id_user' => $faker->randomNumber($nbDigits = NULL, $strict = false),
        'content' => $faker->sentence(20),
        
    ];
});
