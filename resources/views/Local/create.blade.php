@extends('layouts.default')
@section('content')

@if ($errors->any())
<div class="container">
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
</div>
@endif

@if(session("success"))
<div class="container">
    <div class="alert alert-success" role="alert">
        <p>{{session('success')}}</p>
    </div>
</div>
<br/>
@endif

<div class="container">
    <form action="/locales" method="post" autocomplete=off>
    @csrf
        <fieldset>
            <legend>Registrar Local</legend>
                <div class="mb-3">
                    <label for="Nombre" class="form-label">Nombre del Local</label>
                    <input type="text" id="nombre" class="form-control" name="nombre">
                </div>
                <div class="mb-3">
                    <label for="Edificio" class="form-label">Edificio</label>
                    <select id="edificio_id" class="form-control" name="edificio_id">
                        <option value="">...</option>
                        @foreach($edificios as $edificio)
                            <option value="{{$edificio->id}}">{{$edificio->nombre}}</opcion>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="Posicion" class="form-label">Numero de piso</label>
                    <input type="number" id="posicion" class="form-control" name="posicion">
                </div>

                </div>
            <input type="submit" class="btn btn-primary" value="Registrar" id="registrar">&nbsp;
            <a href="{{route('materias.index')}}"><button type="button" class="btn btn-danger">Salir</button></a>
        </fieldset>
    </form>
</div>
<br/>

@endsection