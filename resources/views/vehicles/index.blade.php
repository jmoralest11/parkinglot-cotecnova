@extends('layouts.adminlte')
@section('title', 'Listar Vehículos')
@section('content')

    <h1 class="mr-5">Listado de Vehículos</h1>

    <hr>
    
    <a href="{{route('vehicles.create')}}" class="btn btn-info">Registrar Vehículo</a>

    <hr>

    <table id="example" class="table table-striped table-bordered text-center" style="width:100%">
        <thead>
            <tr>
                <th>Placa</th>
                <th>Marca</th>
                <th>Cédula Propietario</th>
                <th>Propietario</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($vehicles as $vehicle)
            <tr>
                <td>{{$vehicle->placa}}</td>
                <td>{{$vehicle->brand->marca}}</td>
                <td>{{$vehicle->person->cedula}}</td>
                <td>{{$vehicle->person->name}} {{$vehicle->person->apellidos}}</td>
                <td>
                    <a href="{{route('vehicles.show', $vehicle->id)}}" class="btn btn-primary">Ver</a>
                    <a href="{{route('vehicles.edit', $vehicle->id)}}" class="btn btn-warning">Editar</a>
                </td>
            </tr>
            @endforeach
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