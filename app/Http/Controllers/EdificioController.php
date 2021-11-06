<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Edificio;
use App\Models\Escuela;
use App\Models\EdificioEscuela;

class EdificioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Escuela $escuela)
    {
        return view('edificio.index', ['escuela'=>$escuela]);
    }

    public function showAll(Escuela $escuela){
        return view('edificio.showall', ['escuela'=>$escuela, 'edificios'=>Edificio::all()]);
    }

    public function establecer(Escuela $escuela, Edificio $edificio){
        EdificioEscuela::create([
            'edificio_id'=>$edificio->id,
            'escuela_id'=>$escuela->id,
        ]);
    }
}
