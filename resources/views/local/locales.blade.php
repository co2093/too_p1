@extends('layouts.default')
@section('content')

<div class="container-fluid">
  <div class="row">
      <div class="col">
        <strong>Locales Disponibles para Reservar</strong> 
      </div>
  </div>

  <div class="row row-cols-1 row-cols-md-3 g-4">
  @foreach($locales as $local)
  <form action="{{ url('/reservar/local/') }}" method="POST">
                {{ csrf_field() }}
    <div class="col mt-4">
      <div class="card border-info bg-primary h-100">
        @if(!$local->images->isEmpty())
        <img src="{{asset('img/locales/'.$local->images[0]->nombre)}}" class="card-img-top" alt="{{$local->images[0]->nombre}}">
        @else
        <img src="..." class="card-img-top" alt="...">
        @endif
        <div class="card-body text-light">
          <h5 class="card-title">Local: {{$local->nombre}}</h5>
          <p class="card-text"> 
 
          <fieldset>

                <input type="hidden" id="local_id" class="form-control" name="local_id" value="{{$local->id}}">

                <div class="form-group row">
                    <label class="col-md-5 form-control-label" for="ubicacion">Ubicación</label>
                    <div class="col-md-7">
                        <input type="text" id="ubicacion" name="ubicacion" value="{{$local->edificio->ubicacion}}" class="form-control" readonly>
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-md-5 form-control-label" for="edificio">Edificio</label>
                    <div class="col-md-7">
                        <input type="text" id="edificio" name="edificio" value="{{$local->edificio->nombre}}" class="form-control" readonly>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-5 form-control-label" for="planta">Planta No.</label>
                    <div class="col-md-7">
                        <input type="text" id="planta" name="planta" value="{{$local->planta}}" class="form-control" readonly>
                    </div>
                </div>
            </fieldset>
          </p>         
          <button type="submit" class="btn btn-success mb-2">Reservar</button>
        </div>
      </div>
    </div>
    </form>
  @endforeach
  </div>
</div>

@endsection
