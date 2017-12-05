<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsistenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asistencias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('contrato_id')->unsigned()->index();
            $table->foreign('contrato_id')->references('id')->on('contratos');
            $table->integer('motivo_inasistencia_id')->unsigned()->index()->nullable();
            $table->foreign('motivo_inasistencia_id')->references('id')->on('motivo_inasistencias');
            $table->date('fecha');
            $table->enum('asitio', ['100', '50', '0'])->index();
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
        Schema::dropIfExists('asistencias');
    }
}
