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

/**
*
* Populate data users with faker in testing database when running phpunit
*
* @return void
* @author thomas
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

/**
*
* Populate data users with faker in testing database when running phpunit
*
* @return void
* @author thomas
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
