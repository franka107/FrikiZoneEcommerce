<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->word,
        'slug' => $faker->word,
        'description' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'color' => $faker->hexcolor,
        
    ];
});
