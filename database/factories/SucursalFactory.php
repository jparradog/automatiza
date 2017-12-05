<?php

use Faker\Generator as Faker;

$factory->define(App\Sucursal::class, function (Faker $faker) {
    return [
        'nombre' => $faker->company,
        'activo' => $faker->boolean,
        'empresa_id' => function () {
            return factory(App\Empresa::class)->create()->id;
        },
        'created_at' => $faker->dateTimeThisDecade,
        'updated_at' => $faker->dateTimeThisDecade,
    ];
});
