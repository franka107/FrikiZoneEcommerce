<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Product;
use App\Category;
use App\Comment;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {

    $categories=Category::all();
    $category_ids = array();

    foreach($categories as $category)
    {
        $category_ids[] = $category->id;
    }

    //$comments = DB::collection('comments')->get();

    return [

        
        'name' => $x=substr($faker->sentence(1), 0, -1),
        'slug' => $x,
        'description' => $faker->sentence(20),
        'extract' => $faker->sentence(10),
        'price' => $faker->numberBetween($min = 1, $max = 100),
        'image'=> $faker->image('public/images', 300, 300, null, false),
        'visible' => $faker->boolean,
        'category_id' => $faker->randomElement($category_ids),
        /*'comments' =>[
           $faker->randomElement($comments),
        ]
        */
        // faker comments en modo de prueba, funcional pero
        // duplica id del comentario en diferentes productos
        
    ];
    
});




