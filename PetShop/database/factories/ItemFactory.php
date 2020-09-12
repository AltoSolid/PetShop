
Seeder<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Item;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(Item::class, function (Faker $faker) {
    return [
        'quantity' => $faker->numberBetween($min = 1, $max = 1000),
        'subtotal' => $faker->numberBetween($min = 200, $max = 20000000),
        'order_id' => 'factory:App\Order',
        'product_id' => 'factory:App\Product',
    ];
});
    