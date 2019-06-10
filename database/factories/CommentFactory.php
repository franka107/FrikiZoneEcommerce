<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Comment;
use App\Product;
use App\User;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {

 /*   $products=Product::all();
    $product_ids = array();

    foreach($products as $product)
    {
        $product_ids[] = $product->id;
    }
*/
    $users=User::all();
    $user_ids =  array();

    foreach($users as $user)
    {
        $user_ids[] = $user->id;
    }
    return [
        //
        'content' => $faker->sentence(20),
        'user_id' => $faker->randomElement($user_ids),
        
    ];
});
