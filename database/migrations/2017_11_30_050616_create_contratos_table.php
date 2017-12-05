<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContratosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contratos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('empleado_id')->unsigned()->index();
            $table->integer('sucursal_id')->unsigned()->index();
            $table->integer('cargo_id')->unsigned()->index();
            $table->boolean('activo')->default(true);
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->integer('duracion_meses')->unsigned();
            $table->timestamps();
            

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contratos');
    }
}
