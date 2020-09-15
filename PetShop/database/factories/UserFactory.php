<?php

//Autor: Santiago Hincapié Murillo
/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
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

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'address'=>$faker->state,
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'email' => $faker->unique()->safeEmail,
        'contact' => $faker->numberBetween(3001112222,3220002211),
        'creditCard'=>$faker->bankAccountNumber,
        'petlist'=>'',
        'remember_token' => Str::random(10),
    ];
});
