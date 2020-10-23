@extends('layouts.adminlte')
@section('title', 'ParkingLot Cotecnova')
@section('content')

    <h1>Información Parqueadero</h1>

    <hr>

    <table id="example" class="table table-striped table-bordered text-center" style="width:100%">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Capacidad</th>
                <th>Cupos Disponibles</th>
                <th>Dirección</th>
                <th>Fecha Creación</th>
                <th>Última Actualización</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$parking->nombre}}</td>
                <td>{{$parking->capacidad}}</td>
                <td style="font-weight: bold; font-size: 20px;" class="yellow">{{$parking->cupos}}</td>
                <td>{{$parking->direccion}}</td>
                <td>{{$parking->created_at}}</td>
                <td>{{$parking->updated_at}}</td>
                <td>
                    <a href="{{route('parking.edit', $parking->id)}}" class="btn btn-warning">Editar</a>
                </td>
            </tr>
        </tbody>
    </table>

    @section('scripts')
        @if(Session::has('Mensaje'))
            <script>
                toastr.success('{{Session::get("Mensaje")}}');
            </script>
        @endif
    @endsection

@endsection