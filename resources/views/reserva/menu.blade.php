@extends('layouts.default')
@section('content')


<div class="container-fluid">

<div class="card">
  <div class="card-header">
    Selección de local
  </div>
  <div class="card-body">
    
  <form action="{{ url('/horarios/local/') }}" method="POST" class="form-inline">
  {{ csrf_field() }}

  <div class="form-group mb-2">
    <label for="staticEmail2" class="sr-only">Locales</label>
    <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Lista de locales disponibles">
  </div>

  <div class="form-group mx-sm-3 mb-2">

    <select class="form-control" id="local" name="local">
      <option value="LCOM1">LCOM1</option>
    </select>
  </div>
  <button type="submit" class="btn btn-primary mb-2">Confirmar</button>
</form>


  </div>
</div>


</div>

@endsection
