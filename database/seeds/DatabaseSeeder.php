<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
	        UsersTableSeeder::class,
	        EmpresasTableSeeder::class,
	        SucursalsTableSeeder::class,
            CargosTableSeeder::class,
            ContratosTableSeeder::class,
            EmpleadosTableSeeder::class,
            FestivosTableSeeder::class,
            MotivoInasisteciasTableSeeder::class,
            AsistenciasTableSeeder::class,

    	]);
    }
}
