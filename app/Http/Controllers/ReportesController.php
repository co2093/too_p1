<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use App\Models\Reserva;
use App\Models\Locale;
use App\Models\Horario;
use App\Models\Materia;
use App\Models\Docente;
use DB;


class ReportesController extends Controller
{
    //
    public function index(){

        return view('reportes.menu');
    }

    public function descargarPDF(Request $request){

        $tipoReporte = $request->input('tiporeporte');

        //dd($tipoReporte);

        $reservas = Reserva::all(); 

        $locales = DB::table('locales')->get();
        //dd($locales);
        $actividades = DB::table('reservas')
        ->select('local_id', DB::raw('count(*) as cantidad'))
        ->groupBy('local_id')
        ->get();
        //dd($reservas);
        
        $pdf = PDF::loadView('reportes.layout', ["tipoReporte"=>$tipoReporte, "actividades"=>$actividades, "reservas"=>$reservas, "locales"=>$locales]);
        

        



        return $pdf->download('reporte.pdf');
    }



}
