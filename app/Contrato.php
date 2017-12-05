<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
	protected $guarded = [];
    /**
     * Trae el empleado al que pertenece el contrato.
     */
    public function empleado()
    {
        return $this->belongsTo(Empleado::class);
    }

    /**
     * Trae las sucursales.
     */
    public function sucursal()
    {
        return $this->belongsTo(Sucursal::class);
    }

    /**
     * Trae el cargo.
     */
    public function cargo()
    {
        return $this->belongsTo(Cargo::class);
    }

    /**
    * Traer todas las asistencias o inasistencias.
    */
    public function asistencias()
    {
        return $this->hasMany(Asistencia::class);
    }
}
