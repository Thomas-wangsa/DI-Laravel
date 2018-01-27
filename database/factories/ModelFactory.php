<?php

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

/*
|--------------------------------------------------------------------------
| Database Factory for Users Table
| populate data with faker
| https://laravel.com/docs/5.5/seeding
|--------------------------------------------------------------------------
| @author Thomas
|
*/

$factory->define(App\Http\Models\Users::class, function (Faker $faker) {
    return [
        'name'          => strtolower(trim($faker->name)),
        'email'         => $faker->unique()->safeEmail,
        'password'      => Hash::make(str_random(10)),
        'remember_token'=> Hash::make(str_random(10)),
        'created_at'	=> date("Y-m-d H:i:s")

    ];
});

/*
|--------------------------------------------------------------------------
| Database Factory for Nigorice Table
| populate data with faker
| https://laravel.com/docs/5.5/seeding
|--------------------------------------------------------------------------
| @author Thomas
|
*/

$factory->define(App\Http\Models\Nigorice::class, function (Faker $faker) {
    return [
        'date'          => $faker->date("2017-m-d","now"),
        'max'         	=> $faker->numberBetween(50,60),
        'min'      		=> $faker->numberBetween(40,49),
        'uuid'          => $faker->uuid,
        'created_at'	=> date("Y-m-d H:i:s")
    ];
});
