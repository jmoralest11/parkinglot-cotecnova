@extends('layouts.adminlte')
@section('title', 'Mostrar Usuario')
@section('content')

        <h1>Detalle del Usuario</h1>

        <hr>

        <table class="table-bordered table text-center">
            <tr class="thead-dark">
                <th>Cédula</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Dirección</th>
                <th>Fecha Creación</th>
                <th>Última Actualización</th>
                <th>Imagen</th>
            </tr>
            <tr>
                <td>{{$person->cedula}}</td>
                <td>{{$person->name}}</td>
                <td>{{$person->apellidos}}</td>
                <td>{{$person->email}}</td>
                <td>{{$person->telefono}}</td>
                <td>{{$person->direccion}}</td>
                <td>{{$person->created_at}}</td>
                <td>{{$person->updated_at}}</td>
                <td><img src="{{asset('storage/'.$person->imagen)}}" width="100" class="img-fluid"></td>
            </tr>
        </table>

        <a href="{{route('persons.index')}}" class="btn btn-success">Volver Atrás</a>

@endsection