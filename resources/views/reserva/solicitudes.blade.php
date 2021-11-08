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
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body text-info">
          <h5 class="card-title">Reserva</h5>
          <p class="card-text"> 


          <fieldset>
                <legend>Editar Docente</legend>

                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="name">Local</label>
                    <div class="col-md-9">
                        <input type="text" id="local" name="local" value="{{$local->nombre}}" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="name">Materia</label>
                    <div class="col-md-9">
                        <input type="text" id="materia" name="materia" value="{{$materia->nombre}}" class="form-control">
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="name">Docente</label>
                    <div class="col-md-9">
                        <input type="text" id="materia" name="materia" value="{{$docente->nombre}}" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="name">Horario</label>
                    <div class="col-md-9">
                        <input type="text" id="materia" name="materia" value="{{$horario->dia}}" class="form-control">
                        <input type="text" id="materia" name="materia" value="{{$horario->hora}}" class="form-control">
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
