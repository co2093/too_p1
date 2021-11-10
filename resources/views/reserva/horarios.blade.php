@extends('layouts.default')
@section('content')


<div class="container-fluid">

    <div class="card">
        <div class="card-header text-center">Horarios de laboratorio {{$locale->nombre}}</div>
        <div class="card-body">


        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th class="table-primary" scope="col">Horario</th>
                    <th class="table-primary" scope="col">Lunes</th>
                    <th class="table-primary" scope="col">Martes</th>
                    <th class="table-primary" scope="col">Miercoles</th>
                    <th class="table-primary" scope="col">Jueves</th>
                    <th class="table-primary" scope="col">Viernes</th>
                    <th class="table-primary" scope="col">Sabado</th>
                </tr>
        
            </thead>
            <tbody>
                <tr>
                    <th scope="row">6:20-8:00</th>

                </tr>
                
                <tr>
                    <th scope="row">8:08-9:45</th>
       
                </tr>
                <tr>
                    <th scope="row">9:50-11:30</th>
                 
                </tr>
                <tr>
                    <th scope="row">11:35-1:15</th>
                 
                </tr>
                <tr>
                    <th scope="row">1:20-3:00</th>
                 
                </tr>
                <tr>
                    <th scope="row">3:05-4:45</th>
                 
                </tr>
                <tr>
                    <th scope="row">4:50-6:30</th>
                 
                </tr>
                <tr>
                    <th scope="row">6:35-8:15</th>
                 
                </tr>
            </tbody>
        </table>

        </div>
    </div>




    <div class="card">
        <div class="card-header text-center">Solicitar horario para {{$locale->nombre}}</div>
            <div class="card-body">

            <form action="{{ url('/solicitudes') }}" method="POST" class="form-inline">
                {{ csrf_field() }}

            <div class="form-group mb-2">
                <label for="staticEmail2" class="sr-only">Locales</label>
                <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Seleccionar">
            </div>

            <input type="hidden" id="locale_id" class="form-control" name="locale_id" value="{{$locale->id}}">

            <div class="form-group mx-sm-3 mb-2">
                <select class="form-control" id="hora" name="hora" required>
                    <option value="">HORA</option>
                    @foreach($horas as $hora)
                     <option value="{{$hora}}">{{$hora}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group mx-sm-3 mb-2">
                <select class="form-control" id="dia" name="dia" required>
                    <option value="">DIA</option>
                    @foreach($dias as $dia)
                     <option value="{{$dia}}">{{$dia}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group mx-sm-3 mb-2">
                <select class="form-control" id="materia_id" name="materia_id" required>
                    <option value="">MATERIA</option>
                    @foreach($materias as $materia)
                     <option value="{{$materia->id}}">{{$materia->nombre}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary mb-2">Confirmar</button>
            </form>

            </div>
        </div>
    </div>

</div>

@endsection
