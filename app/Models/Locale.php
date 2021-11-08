<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locale extends Model
{
    use HasFactory;

    protected $fillable = ['edificio_id', 'horario_id', 'nombre', 'planta'];

    public function edificio()
    {
        return $this->belongsTo('App\Models\Edificio');

    }

    public function horario()
    {
        return $this->hasOne('App\Models\Horario');
        
    }
}