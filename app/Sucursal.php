<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Empleado;

class Sucursal extends Model
{
    protected $guarded = [];
    /**
     * Trae la empresa a la que pertenece la sucursal.
     */
    public function empresa()
    {
        return $this->belongsTo(Empresa::class);
    }

    /**
     * Trae los contratos que pertenecen a la sucursal
     */
    public function contratos()
    {
        return $this->hasMany(Contrato::class);
    }
}
