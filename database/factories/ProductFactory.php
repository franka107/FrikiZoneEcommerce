<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => substr($faker->sentence(2), 0, -1),
        'sku' => $faker->randomNumber($nbDigits = NULL, $strict = false),
        'description' => $faker->sentence(20),
        'price' => $faker->numberBetween($min = 50, $max = 2000),
        'img' => $faker->image('public/images', 250, 250, null, false)
        //
    ];
});
