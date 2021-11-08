<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;
    protected $fillable = ['local_id', 'materia_id', 'docente_id', 'horario_id'];

    public function edificio()
    {
        return $this->belongsTo('App\Models\Edificio');

    }

    public function horario()
    {
        return $this->hasOne('App\Models\Horario');
        
    }
}
