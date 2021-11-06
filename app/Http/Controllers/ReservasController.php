<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ReservasController extends Controller
{
    //
    public function index(){

        return view('reserva.menu');
    }

    public function horarios(Request $request){

        $id = $request->input('local');

      //  dd($id);


        return view('reserva.horarios', compact('id'));
    }
}
