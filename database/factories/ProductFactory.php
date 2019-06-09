<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Product;
use App\Category;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {

    $categories=Category::all();
    $category_ids = array();

    foreach($categories as $category)
    {
        $category_ids[] = $category->id;
    }
    return [
        
        'name' => substr($faker->sentence(2), 0, -1),
        'slug' => substr($faker->sentence(2), 0, -1),
        'description' => $faker->sentence(20),
        'extract' => $faker->sentence(10),
        'price' => $faker->numberBetween($min = 50, $max = 2000),
        'image'=> $faker->image('public/images', 400, 300, null, false),
        'visible' => $faker->boolean,
        'category_id' => $faker->randomElement($category_ids)
        //
    ];
});
