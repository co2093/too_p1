<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    use HasFactory;
    protected $fillable = ["escuela_id", "prerrequisito_id", "codigo_materia", "nombre", "unidades_valorativas", "num_ciclo"];
    public function materia()
    {
        return $this->hasOne('App\Models\Materia');
    }

    public function prerrequisito()
    {
        return $this->belongsTo('App\Models\Materia', 'id');
    }
    public function escuela()
    {
        return $this->belongsTo('App\Models\Escuela');
    }
}
