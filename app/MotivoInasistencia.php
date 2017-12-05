<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MotivoInasistencia extends Model
{
    protected $guarded = [];

    /**
    * Traer todas las asistencias relacionadas.
    */
	public function asistencias()
    {
        return $this->hasMany(Asistencia::class);
    }
}
