<?php

use Faker\Generator as Faker;

$factory->define(App\Empleado::class, function (Faker $faker) {
    return [
        'primer_nombre' => $faker->firstName,
        'segundo_nombre' => $faker->firstName,
        'primer_apellido' => $faker->lastName,
        'segundo_apellido' => $faker->lastName,
        'edad' => $faker->numberBetween(5,100),
        'sexo' => $faker->randomElement($array = array ('m','f')),
        'fecha_nacimiento' => $faker->dateTimeBetween('-100 years', '-18 years'),
        'created_at' => $faker->dateTimeThisDecade,
        'updated_at' => $faker->dateTimeThisDecade,
    ];
});