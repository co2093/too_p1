<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Edificio extends Model
{
    use HasFactory;


    public function escuelas()
    {
        return $this->belongsToMany('App\Models\Escuela');
    }
}
