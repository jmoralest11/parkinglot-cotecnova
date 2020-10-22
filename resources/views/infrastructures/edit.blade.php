@extends('layouts.adminlte')
@section('title', 'Registrar Problema')
@section('content')

<h1>Registrar Problema</h1>

<hr>

<form action="{{route('infrastructure.update', $infrastructure->id)}}" method="POST">
    @csrf()

    <input type="hidden" name="_method" value="put">

    <div class="form-group">
        <label for="necesidad">Tipo Necesidad</label>
        <input type="text" name="necesidad" class="form-control" placeholder="Ingrese Necesidad Presentada" value="{{$infrastructure->tipo_necesidad}}">
    </div>

    <div class="form-group">
        <label for="descripcion">Descripcion</label>
        <textarea type="text" name="descripcion" class="form-control" placeholder="Ingrese Descripción del Problema">{{$infrastructure->descripcion}}</textarea>
    </div>

    <div class="form-group col-md-6">
        <label for="prioridad">Prioridad</label>
        <select name="prioridad" class="form-control">
            <option value="Baja">Baja</option>
            <option value="Media">Media</option>
            <option value="Alta">Alta</option>
        </select>
    </div>

    <div class="form-group col-md-6">
        <label for="estado">Estado Actual</label>
        <select name="estado" class="form-control">
            <option value="Por realizar">Por Realizar</option>
            <option value="En proceso">En Proceso</option>
            <option value="Terminado">Terminado</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Editar Problemática</button>

    <a href="{{route('infrastructure.index')}}" class="btn btn-success">Ir Atrás</a>

</form>

@endsection