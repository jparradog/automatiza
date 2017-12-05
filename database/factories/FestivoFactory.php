<?php

use Faker\Generator as Faker;

$factory->define(App\Festivo::class, function (Faker $faker) {
    return [
        'nombre' => "Festivo Prueba",
        'activo' => $faker->boolean,
        'fecha' => $faker->dateTimeThisDecade,
        'created_at' => $faker->dateTimeThisDecade,
        'updated_at' => $faker->dateTimeThisDecade,
    ];
});
