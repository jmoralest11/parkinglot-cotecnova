@extends('layouts.adminlte')
@section('title', 'Registrar Problema')
@section('content')

<h1>Registrar Problema</h1>

<hr>

<form action="{{route('infrastructure.store')}}" method="POST" enctype="multipart/form-data">
    @csrf()


    <div class="form-group">
        <label for="necesidad">Tipo Necesidad</label>
        <input type="text" name="necesidad" class="form-control {{ $errors->has('necesidad')? 'is-invalid' : '' }}" placeholder="Ingrese Necesidad Presentada" value="{{old('necesidad')}}">
        @if($errors->has('necesidad'))
        <div class="invalid-feedback">
            {{$errors->first('necesidad')}}
        </div>
        @endif
    </div>

    <div class="form-group">
        <label for="descripcion">Descripcion</label>
        <textarea type="text" name="descripcion" class="form-control {{ $errors->has('descripcion')? 'is-invalid' : '' }}" placeholder="Ingrese Descripción del Problema" value="{{old('descripcion')}}"></textarea>
        @if($errors->has('descripcion'))
        <div class="invalid-feedback">
            {{$errors->first('descripcion')}}
        </div>
        @endif
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

    <button type="submit" class="btn btn-primary">Registrar Problema</button>

    <a href="{{route('infrastructure.index')}}" class="btn btn-success">Ir Atrás</a>

</form>
@endsection