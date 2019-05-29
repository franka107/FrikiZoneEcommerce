<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [
        //
        'user_id' => $faker->randomNumber($nbDigits = NULL, $strict = false),
        'products' => [
            'sku' => $faker->randomNumber($nbDigits = NULL, $strict = false),
            'quantity' => $faker->numberBetween($min = 1, $max = 10),
        ],
        //'status' => randomElement($array = array ('paid','waiting'))
       //faker embebido, aun en construccion
    ];
});
