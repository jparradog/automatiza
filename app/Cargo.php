<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    protected $guarded = [];

    /**
     * Traer todos los contratos.
     */
    public function contratos()
    {
        return $this->hasMany(Contrato::class);
    }
}
