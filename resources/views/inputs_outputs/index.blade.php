@extends('layouts.adminlte')
@section('title', 'Listar Entradas y Salidas')
@section('content')

    <div class="row">
        <h1 class="mr-4">Listado Entradas y Salidas</h1>
        
        <a href="{{route('inputs_outputs.create')}}" class="btn btn-info">Registrar</a>
    </div>

    <hr>

    <form action="{{route('visualizar-reporte')}}" method="POST">
        @csrf()

        <div class="row">
            <div class="form-group col-md-6">
                <label for="fecha_inicio">Fecha Inicio</label>
                <input type="date" name="fecha_inicio" class="form-control" placeholder="Ingrese Nombre del Usuario">     
            </div>

            <div class="form-group col-md-6">
                <label for="fecha_fin">Fecha Final</label>
                <input type="date" name="fecha_fin" class="form-control" placeholder="Ingrese Nombre del Usuario">     
            </div>
        </div>
        <button type="submit" class="btn btn-info">Generar Reporte</button>
    </form>

    <hr>

    <table id="example" class="table table-striped table-bordered text-center" style="width:100%">
        <thead>
            <tr>
                <th>Placa Vehículo</th>
                <th>Estado</th>
                <th>Fecha-Hora Ingreso</th>
                <th>Fecha-Hora Salida</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($InputOutputs as $InputOutput)
            <tr>
                <td>{{$InputOutput->vehicles->placa}}</td>
                @if($InputOutput->estado == 'En Parqueadero')
                    <td class="green" style="font-weight: bold;">{{$InputOutput->estado}}</td>
                @else
                    <td class="yellow" style="font-weight: bold;">{{$InputOutput->estado}}</td>
                @endif
                <td>{{$InputOutput->created_at}}</td>
                <td>{{$InputOutput->updated_at}}</td>
                <td>
                    <a href="{{route('inputs_outputs.edit', $InputOutput->id)}}" class="btn btn-warning">Editar</a>
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