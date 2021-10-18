@extends('layouts.default')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <a href="{{route('materias.create')}}"><button class="btn btn-primary" type="button">Insertar</button></a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Codigo</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Escuela</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($materias as $materia)
                    <tr>
                        <th scope="row">{{$materia->id}}</th>
                        <td>{{$materia->codigo_materia}}</td>
                        <td>{{$materia->nombre}}</td>
                        <td>{{$materia->escuela->nombre}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection