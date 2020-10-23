@extends('layouts.adminlte')
@section('title', 'Registrar Vehículo')
@section('content')

<h1>Registrar Vehículo</h1>

<hr>

<form action="{{route('vehicles.update', $vehicle->id)}}" method="POST">
    @csrf()

    <input type="hidden" name="_method" value="put">

    <div class="form-group">
        <label for="placa">Placa</label>
        <input type="text" name="placa" class="form-control" placeholder="Ingrese Placa del Vehículo" value="{{$vehicle->placa}}" required>
    </div>

    <div class="form-group">
        <label for="marca">Marca</label>
        <select name="marca" class="form-control">
            <option value="Renault">Renault</option>
            <option value="Toyota">Toyota</option>
            <option value="Yamaha">Yamaha</option>
            <option value="Audi">Audi</option>
        </select>
    </div>


    <div class="form-group">
        <label for="color">Color</label>
        <select name="color" class="form-control">
            <option value="Rojo">Rojo</option>
            <option value="Negro">Negro</option>
            <option value="Blanco">Blanco</option>
            <option value="Amarillo">Amarillo</option>
            <option value="Verde">Verde</option>
            <option value="Cafe">Café</option>
            <option value="Azul">Azul</option>
            <option value="Plateado">Plateado</option>
            <option value="Gris">Gris</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Editar Vehículo</button>

    <a href="{{route('vehicles.index')}}" class="btn btn-success">Ir Atrás</a>
</form>
@endsection