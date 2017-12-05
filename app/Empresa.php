<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
	protected $guarded = [];
    /**
    * Traer todas las sucursales de la empresa.
    */
	public function sucursales()
    {
        return $this->hasMany(Sucursal::class);
    }
}
