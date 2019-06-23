<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\SavedClient;
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

$factory->define(SavedClient::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'nameAdress' => $faker->name,
        'length' =>rand(2,1500),
        'altitude' => rand(2,1500),
        'x' => rand(2,1500),
        'y' => rand(2,1500),
        
    ];
});
