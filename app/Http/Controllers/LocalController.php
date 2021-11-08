<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Locale;
use App\Models\Edificio;

class LocalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('local.index', ['locales'=>Locale::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('local.create', ['edificios'=>Edificio::all(), 'locales'=>Locale::all()]);
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
            'edificio_id' => 'required|numeric',
            'horario_id' => 'numeric',
            'nombre' => 'required|regex:/\w/',
            'planta' => 'required|integer']);

        $data = $request->all();  
        Locale::create($data);
        $request->session()->flash('success', '¡El Local se registro con exito!');
        return redirect('/locales/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Locale $locale)
    {
        return view('local.edit', ['locale' => $locale, 'edificios' => Edificio::all()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Locale $locale)
    {
        $validatedData = $request->validate([
            'edificio_id' => 'required|numeric',
            'horario_id' => 'numeric',
            'nombre' => 'required|regex:/\w/',
            'planta' => 'required|integer']);

        $locale->update($request->All());
        $request->session()->flash('success', '¡El local se actualizó con exito!');
        return redirect('/locales');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Locale $locale)
    {
        $locale->delete();
        $request->session()->flash('success', 'Local eliminado exitosamente!');
        return redirect('/locales');
    }
}
