<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Locale;
use App\Models\Horario;
use App\Models\Materia;
use App\Models\Docente;
use App\Models\Reserva;
use DB;

class ReservasController extends Controller
{
    //
    public function index(){

        return view('reserva.menu', ['locales'=>Locale::all()]);
    }

    public function horarios(Request $request){

        $id = $request->input('locale');
        $locale = Locale::findOrFail($id);
        $horarios = Horario::all();
        $materias = Materia::all();
      //  dd($id);


        return view('reserva.horarios', compact(['locale', 'horarios', 'materias']));
    }

    public function solicitudesIndex(Request $request, Locale $locale){

        $validatedData = $request->validate([
            'dia' => 'required|regex:/\w/',
            'hora' => 'required|regex:/\w/',
            'materia_id' => 'required|numeric'
        ]);

        $materia = Materia::findOrFail($request->materia_id);
        $id_docente = $materia->docente_id;
        $docente = Docente::findOrFail($id_docente);
        $horario = Horario::create(['hora'=>$request->hora, 'dia'=>$request->dia]);
        $id_horario = $horario->id;
        $id_local = $local->id;

        Reserva::create(['local_id'=>$id_local, 'materia_id'=>$request->materia_id, 'docente_id'=>$request->docente_id, 'horario_id'=>$request->horario_id]);

        return view('reserva.solicitudes', ['locale' => $locale, 'materia' => $materia, 'docente' => $docente, 'horario' => $horario]);
    }
}
