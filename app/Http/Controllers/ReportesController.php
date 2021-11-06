<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;


class ReportesController extends Controller
{
    //
    public function index(){

        return view('reportes.menu');
    }

    public function descargarPDF(Request $request){

        $tipoReporte = $request->input('tiporeporte');

        //dd($tipoReporte);

        $pdf = PDF::loadView('reportes.layout', ["tipoReporte"=>$tipoReporte]);

        

        return $pdf->download('reporte.pdf');
    }



}
