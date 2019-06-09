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
            'unit_price' => $faker->numberBetween($min = 200, $max = 100),
            ''
        ],
        'total_price' => $faker->numberBetween($min = 1000, $max = 500),
        //'status' => randomElement($array = array ('paid','waiting'))
       //faker embebido, aun en construccion
    ];
});
