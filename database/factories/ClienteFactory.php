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

$factory->define(App\Cliente::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'nit' => mt_rand(10000000, 99999999),
        'direccion' => $faker->address,
    ];
});
