<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use App\Models\Escuela;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('materia.index', ['materias'=>Materia::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('materia.create', ['escuelas'=>Escuela::all(), 'materias'=>Materia::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'codigo_materia' => 'required|max:6',
            'nombre' => 'required',
            'escuela_id' => 'required',
            'unidades_valorativas' => 'required|integer',
            'num_ciclo' => 'required|integer']);

        $data = $request->all();
        Materia::create($data);
        $request->session()->flash('success', '¡La materia se registro con exito!');
        return redirect('/materias/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function show(Materia $materia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function edit(Materia $materia)
    {
        return view('materia.edit', ['materia' => $materia, 'escuelas' => Escuela::all(), 'todasMaterias' => Materia::all()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Materia $materia)
    {
        $validatedData = $request->validate([
            'codigo_materia' => 'required|max:6',
            'nombre' => 'required',
            'escuela_id' => 'required',
            'unidades_valorativas' => 'required|integer',
            'num_ciclo' => 'required|integer']);

        $materia->update($request->all());
        return redirect('/materias');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Materia $materia)
    {
        $materia->delete();
        return redirect('/materias');
    }
}
