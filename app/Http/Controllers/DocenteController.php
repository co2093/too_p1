<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Docente;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use DB;
Use Exception;

class DocenteController extends Controller
{

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
        //
        return view('docente.index', ['docentes'=>Docente::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('docente.create', ['users'=>User::all(), 'docentes'=>Docente::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'user_id' => 'numeric',
            'name' => 'required|alpha',
            'email' => 'required|email',
            'password' => 'required|min:1|max:15|regex:/\w/',
            'dui' => 'required|regex:/(\d{8}\-\d{1})/',
            'nit' => 'required|regex:/(\d{4}\-\d{6}\-\d{3}\-\d{1})/',
            'fecha_n'=>'required|date',
            'estado' => 'numeric']);
        
        $user = new User();
        $user->rol_id = '2';
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);

        try{
            $user->save();
        }catch(\Illuminate\Database\QueryException $e){
            return redirect('/docentes/create')->with("e","No se pudo guardar, el usuario ya existe");
        }
        
        $id_user = $user->id;

        $docente = new Docente();
        $docente->user_id = $id_user;
        $docente->dui = $request->dui;
        $docente->nit = $request->nit;
        $docente->fecha_n = $request->fecha_n;
        $docente->estado = '1';

        try{
            $docente->save();
        }catch(\Illuminate\Database\QueryException $e){
            return redirect('/docentes/create')->with("e","No se pudo guardar los datos del docente");
        }

        $request->session()->flash('success', '¡El docente se registro con exito!');
        return redirect('/docentes/create');

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
    public function edit(Docente $docente)
    {
        //
        return view('docente.edit', ['docente' => $docente, 'users' => User::all()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Docente $docente)
    {
        //


        $validatedData = $request->validate([
            'user_id' => 'numeric',
            'name' => 'required|alpha',
            'email' => 'required|email',
            'password' => 'required|min:1|max:15|regex:/\w/',
            'dui' => 'required|regex:/(\d{8}\-\d{1})/',
            'nit' => 'required|regex:/(\d{4}\-\d{6}\-\d{3}\-\d{1})/',
            'fecha_n'=>'required|date',
            'estado' => 'numeric']);

            $user = User::findOrFail($request->user_id);
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);

            try{
                $user->save();
            }catch(\Illuminate\Database\QueryException $e){
                return redirect('/docentes')->with("e","No se pudo guardar, el usuario ya existe");
            }
            
            /* $id_user = $user->id;
            $docente->user_id = $id_user; */
            $docente->dui = $request->dui;
            $docente->nit = $request->nit;
            $docente->fecha_n = $request->fecha_n;
            $docente->estado = '1'; 
    
            try{
                $docente->save();
            }catch(\Illuminate\Database\QueryException $e){
                return redirect('/docentes')->with("e","No se pudo guardar los datos del docente");
            }
       
            $request->session()->flash('success', '¡El docente se actualizó con exito!');
            return redirect('/docentes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Docente $docente)
    {
        //
        $docente->delete();
        return redirect('/docentes');
    }
}
