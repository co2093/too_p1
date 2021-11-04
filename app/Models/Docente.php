<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    use HasFactory;
    protected $fillable = ["user_id", "dui", "nit", "fecha_n", "estado"];
    
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
