@extends('layouts.adminlte')
@section('title', 'Mostrar Problemática')
@section('content')

        <h1>Detalle de la Problemática</h1>

        <hr>

        <table class="table-bordered table text-center">
            <tr class="thead-dark">
                <th>Tipo Necesidad</th>
                <th>Descripción</th>
                <th>Prioridad</th>
                <th>Estado Actual</th>
                <th>Fecha Creación</th>
                <th>Última Actualización</th>
            </tr>
            <tr>
                <td>{{$infrastructure->tipo_necesidad}}</td>
                <td>{{$infrastructure->descripcion}}</td>
                <td>{{$infrastructure->prioridad}}</td>
                <td>{{$infrastructure->estado}}</td>
                <td>{{$infrastructure->created_at}}</td>
                <td>{{$infrastructure->updated_at}}</td>
            </tr>
        </table>

        <a href="{{route('infrastructure.index')}}" class="btn btn-success">Volver Atrás</a>

@endsection