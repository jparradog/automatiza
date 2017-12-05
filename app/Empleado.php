<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Sucursal;

class Empleado extends Model
{
    protected $guarded = [];
    /**
     * Trae Sucursales a las que pertenece el empleado
     */
    public function sucursales()
    {
        // return $this->belongsToMany('App\Sucursal')->using('App\EmpleadoSucursal');
        return $this->belongsToMany(Sucursal::class, 'empleado_sucursals', 'empleado_id', 'sucursal_id');
    }

    /**
     * Traer todas los contratos  del empleado.
     */
    public function contratos()
    {
        return $this->hasMany(Contrato::class);
    }

    /**
     * Traer solo el contrato vigente.
     */
    public function contratoActivo()
    {
        return $this->hasMany(Contrato::class)->where('activo', true)->first();
    }
}
