<?php

use Faker\Generator as Faker;

$factory->define(App\Asistencia::class, function (Faker $faker) {
    return [
        'contrato_id' => function () {
            return factory(App\Contrato::class)->create()->id;
        },
        'motivo_inasistencia_id' => function () {
            return factory(App\MotivoInasistencia::class)->create()->id;
        },
        'fecha' => $faker->dateTimeThisDecade,
        'asitio' => $faker->randomElement($array = array ('0','50','100')),
        'created_at' => $faker->dateTimeThisDecade,
        'updated_at' => $faker->dateTimeThisDecade,
    ];
});
