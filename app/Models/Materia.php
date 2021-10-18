<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    use HasFactory;
    protected $fillable = ["escuela_id", "prerrequisito_id", "codigo_materia", "nombre", "unidades_valorativas", "num_ciclo"];
    public function prerrequisito()
    {
        return $this->hasOne('App\Models\Materia');
    }

    public function materia()
    {
        return $this->belongsTo('App\Models\Materia', 'prerrequisito_id');
    }
    public function escuela()
    {
        return $this->belongsTo('App\Models\Escuela');
    }
}
