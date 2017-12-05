<?php

use Illuminate\Database\Seeder;

class SucursalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $empresas = Empresa::all()->list('id');
        // foreach (range(1,50) as $index) {
        //     $sucursal = factory(App\User::class)->create([
        //         'empresa_id' => faker->randomElement($empresas),
        //     ]);
        // }
        factory(App\Sucursal::class, 5)->create();
    }
}
