<?php

//Autor : Santiago Hincapié Murillo
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
        'petName' => $faker->randomElement(['Tobby', 'max', 'purple']),
        'typeAnimal' => $faker->randomElement(['Dog', 'cat', 'turtle','bird']),
        'medicalHistory' => $faker->randomElement(['Cancer','Health','Dislexia']),
        "raceAnimal" => $faker->randomElement(["Affenpinscher","Airedale Terrier"]),
        "available" => $faker->randomElement(['Yes', 'No']),
        "genre" => $faker->randomElement(['Male', 'Female']),
        "age" => $faker->numberBetween($min = 1, $max = 50),
        'image' => $faker->image('public/storage/images',640,480, null, false),
    ];
});
