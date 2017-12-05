<?php

use Faker\Generator as Faker;

$factory->define(App\Cargo::class, function (Faker $faker) {
    return [
        'nombre' => $faker->jobTitle,
        'activo' => $faker->boolean,
        'created_at' => $faker->dateTimeThisDecade,
        'updated_at' => $faker->dateTimeThisDecade,
    ];
});
