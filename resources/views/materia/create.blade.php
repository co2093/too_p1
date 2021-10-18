@extends('layouts.default')
@section('content')
<div class="container">
    <form>
        <fieldset>
            <legend>Registrar Materia</legend>
                <div class="mb-3">
                    <label for="CodigoMateria" class="form-label">Codigo de la materia</label>
                    <input type="text" id="CodigoMateria" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="Nombre" class="form-label">Nombre de la materia</label>
                    <input type="text" id="Nombre" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="Escuela" class="form-label">Escuela</label>
                    <input class="form-control" list="datalistOptions" id="Escuela" placeholder="Escoger la escuela">
                    <datalist id="datalistOptions">
                        <option value="San Francisco">
                        <option value="New York">
                        <option value="Seattle">
                        <option value="Los Angeles">
                        <option value="Chicago">
                    </datalist>
                </div>
                <div class="mb-3">
                    <label for="Prerrequisito" class="form-label">Prerrequisito</label>
                    <input class="form-control" list="datalistOptions" id="Prerrequisito" placeholder="Type to search...">
                    <datalist id="datalistOptions">
                        <option value="San Francisco">
                        <option value="New York">
                        <option value="Seattle">
                        <option value="Los Angeles">
                        <option value="Chicago">
                    </datalist>
                </div>
                <div class="mb-3">
                    <label for="Valoracion" class="form-label">Unidades Valorativas</label>
                    <input type="text" id="Valoracion" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="Ciclo" class="form-label">Ciclo en el que se inparte</label>
                    <input type="text" id="Ciclo" class="form-control">
                </div>
            <input type="submit" class="btn btn-primary" value="Registrar">
        </fieldset>
    </form>
</div>
@endsection