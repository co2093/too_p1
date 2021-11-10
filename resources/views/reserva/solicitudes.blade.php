@extends('layouts.default')
@section('content')



<div class="container-fluid">

  <div class="row">
      <div class="col">
        <strong>Solicitudes de reservas</strong> 
      </div>
  </div>

  <div class="row row-cols-1 row-cols-md-3 g-4">
  @foreach($reservas as $reserva)
    <div class="col">
      <div class="card border-info h-100">
        @if(!$reserva->local->images->isEmpty())
        <img src="/img/locales/{{$reserva->local->images[0]->nombre}}" class="card-img-top" alt="{{$reserva->local->images[0]->nombre}}">
        @else
        <img src="..." class="card-img-top" alt="...">
        @endif
        <div class="card-body text-info">
          <h5 class="card-title">Reserva</h5>
          <p class="card-text"> 


          <fieldset>

                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="name">Local</label>
                    <div class="col-md-9">
                        <input type="text" id="local" name="local" value="{{$reserva->local->nombre}}" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="name">Materia</label>
                    <div class="col-md-9">
                        <input type="text" id="materia" name="materia" value="{{$reserva->materia->nombre}}" class="form-control">
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="name">Docente</label>
                    <div class="col-md-9">
                        <input type="text" id="materia" name="materia" value="{{$reserva->docente->user->name}}" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="name">Horario</label>
                    <div class="col-md-9">
                        <input type="text" id="materia" name="materia" value="{{$reserva->horario->dia}}" class="form-control">
                        <input type="text" id="materia" name="materia" value="{{$reserva->horario->hora}}" class="form-control">
                      </div>

                </div>


               


            </fieldset>



          </p>
        </div>
      </div>
    </div>
  @endforeach
  </div>
</div>

@endsection
