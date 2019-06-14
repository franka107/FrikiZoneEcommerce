<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $n=$faker->name,
        'lastname' => $l=$faker->lastname,
        'email' => $faker->unique()->safeEmail,
        'user' => $n.$l,
        'password' => bcrypt('12345678'),
        'type' => 'user',
        'active' => $faker->randomElement([0,1]),
        'address' => $faker->address,
        // password
       
    ];
});
