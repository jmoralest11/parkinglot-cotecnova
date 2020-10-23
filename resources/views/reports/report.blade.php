@extends('layouts.report')
@section('title', 'Reporte')
@section('content')

<hr>

<div class="row">
    <img src="{{asset('img/Logo-Cotecnova.jpg')}}" width="60" class="img-thumbnail img-fluid ml-2">
    <h1 style="margin-left: 85px">Detalle del Reporte</h1>
</div>

<hr>

<p>Nombre del Administrador: {{Auth::user()->name}}</p>
<p>Email del Administrador: {{Auth::user()->email}}</p>
<p>Fecha Solicitud Reporte: {{getdate()['mday']}}/{{getdate()['mon']}}/{{getdate()['year']}}</p>
<p>Hora Solicitud Reporte: {{getdate()['hours']}}:{{getdate()['minutes']}}:{{getdate()['seconds']}}</p>

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