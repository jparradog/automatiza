<?php

use Illuminate\Database\Seeder;

class AsistenciasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Asistencia::class, 20)->create();
    }
}
