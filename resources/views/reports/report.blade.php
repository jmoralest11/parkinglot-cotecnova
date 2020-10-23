@extends('layouts.report')
@section('title', 'Reporte')
@section('content')

<h1>Detalle del Reporte</h1>

<hr>

<table class="table-bordered table text-center">
    <tr class="thead-dark">
        <th>Placa Vehículo</th>
        <th>Fecha-Hora Ingreso</th>
        <th>Fecha-Hora Salida</th>
    </tr>
    @foreach($registros as $registro)
    <tr>
        <td>{{$registro->vehicles->placa}}</td>
        <td>{{$registro->created_at}}</td>
        <td>{{$registro->updated_at}}</td>
    </tr>
    @endforeach
</table>

@endsection