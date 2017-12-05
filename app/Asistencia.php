<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    protected $guarded = [];
    

    /**
     * Trae el contrato que le corresponde.
     */
    public function contrato()
    {
        return $this->belongsTo(Contrato::class);
    }

    /**
     * Trae el motivo de inasistencia si es que existe, que le corresponde.
     */
    public function motivoInasistencia()
    {
        return $this->belongsTo(MotivoInasistencia::class);
    }
    
}
