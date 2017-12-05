<?php

use Illuminate\Database\Seeder;

class EmpleadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $faker = Faker::create();
        // $contratos = Contrato::all()->list('id');
        // $empleado = factory(App\Empleado::class)->create([
        //     'sucursal_id' => faker->randomElement($contratos)
        // ]);
        factory(App\Empleado::class, 5)->create();
    }
}
