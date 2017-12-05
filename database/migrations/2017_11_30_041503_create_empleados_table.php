<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('primer_nombre')->index();
            $table->string('segundo_nombre')->index();
            $table->string('primer_apellido')->index();
            $table->string('segundo_apellido')->index();
            $table->unsignedInteger('edad')->index();
            $table->enum('sexo', ['m', 'f'])->index();
            $table->date('fecha_nacimiento');
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
        Schema::dropIfExists('empleados');
    }
}
