@extends('layouts.adminlte')
@section('title', 'Editar ParkingLot Cotecnova')
@section('content')

<h1>Editar Parqueadero Cotecnova</h1>

<hr>

<form action="{{route('parking.update', $parking->id)}}" method="POST">
    @csrf()

    <input type="hidden" name="_method" value="put">

    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" class="form-control" placeholder="Ingrese Nombre del Parqueadero" value="{{$parking->nombre}}" required>
    </div>

    <div class="form-group">
        <label for="capacidad">Capacidad</label>
        <input type="number" name="capacidad" class="form-control" placeholder="Ingrese Capacidad del Parqueadero" value="{{$parking->capacidad}}" required>
    </div>

    <div class="form-group">
        <label for="cupos">Cupos Disponibles</label>
        <input type="number" name="cupos" class="form-control" placeholder="Ingrese Cupos del Parqueadero" value="{{$parking->cupos}}" required>
    </div>

    <button type="submit" class="btn btn-primary">Editar Parqueadero</button>

    <a href="{{route('parking.index')}}" class="btn btn-success">Ir Atrás</a>
</form>
@endsection