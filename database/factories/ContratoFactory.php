<?php

use Faker\Generator as Faker;

$factory->define(App\Contrato::class, function (Faker $faker) {
    return [
        'empleado_id' => function () {
            return factory(App\Empleado::class)->create()->id;
        },
        'sucursal_id' => function () {
            return factory(App\Sucursal::class)->create()->id;
        },
        'cargo_id' => function () {
            return factory(App\Cargo::class)->create()->id;
        },
        'activo' => $faker->boolean,
        'fecha_inicio' => $faker->dateTimeThisDecade,
        'fecha_fin' => $faker->dateTimeThisDecade,
        'duracion_meses' => 6,
        'created_at' => $faker->dateTimeThisDecade,
        'updated_at' => $faker->dateTimeThisDecade,
    ];
});
