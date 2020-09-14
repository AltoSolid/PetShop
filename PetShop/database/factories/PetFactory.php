<?php
//Autor : Santiago Hincapié Murill
/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pet;
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

$factory->define(Pet::class, function (Faker $faker) {
    return [
        'petName' => $faker->state,
        'typeAnimal' => $faker->dateTimeBetween('2020-09-06', '2022-12-31'),
        'details' => $faker->randomElement(['Not assistants yet','There is more than 100 people','Dance meeting from 8pm every sunday']) 
    ];
});
