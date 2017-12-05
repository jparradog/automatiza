<?php

use Faker\Generator as Faker;

$factory->define(App\MotivoInasistencia::class, function (Faker $faker) {
    return [
        'nombre' => $faker->company,
        'activo' => $faker->boolean,
        'created_at' => $faker->dateTimeThisDecade,
        'updated_at' => $faker->dateTimeThisDecade,
    ];
});
