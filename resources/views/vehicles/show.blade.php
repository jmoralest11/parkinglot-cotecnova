@extends('layouts.adminlte')
@section('title', 'Mostrar Vehículo')
@section('content')

        <h1>Detalle del Vehículo</h1>

        <hr>

        <table class="table-bordered table text-center">
            <tr class="thead-dark">
                <th>Imagen</th>
                <th>Cédula</th>
                <th>Nombre</th>
                <th>Placa</th>
                <th>Marca</th>
                <th>Fecha Creación</th>
            </tr>
            <tr>
                <td>
                    <img src="{{asset('storage/'.$vehicle->person->imagen)}}" width="100" class="img-fluid">
                </td>
                <td>{{$vehicle->person->cedula}}</td>
                <td>{{$vehicle->person->name}} {{$vehicle->person->apellidos}}</td>
                <td>{{$vehicle->placa}}</td>
                <td>{{$vehicle->marca}}</td>
                <td>{{$vehicle->created_at}}</td>
            </tr>
        </table>

        <a href="{{route('vehicles.index')}}" class="btn btn-success">Volver Atrás</a>

@endsection