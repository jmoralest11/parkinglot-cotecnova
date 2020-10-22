@extends('layouts.adminlte')
@section('title', 'Actualizar')
@section('content')

<h1>Actualizar</h1>

<hr>

<form action="{{route('inputs_outputs.update', $InputOutput->id)}}" method="POST">
    @csrf()

    <input type="hidden" name="_method" value="put">

    <div class="form-group">
        <label for="vehicle_id">Placa Vehículo</label>
        <select name="vehicle_id" class="form-control">
            @foreach ($vehicles as $vehicle)
                <option value="{{$vehicle->id}}">{{$vehicle->placa}} - {{$vehicle->person->name}} {{$vehicle->person->apellidos}}</option>
            @endforeach
        </select>
    </div>

    <input type="hidden" name="person_id" value="{{$vehicle->person->id}}">

    <div class="form-group">
        <label for="estado">Estado</label>
        <select name="estado" class="form-control">
            <option value="En Parqueadero">En Parqueadero</option>
            <option value="Fuera de Parqueadero">Fuera de Parqueadero</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Registrar</button>

    <a href="{{route('inputs_outputs.index')}}" class="btn btn-success">Ir Atrás</a>
</form>
@endsection