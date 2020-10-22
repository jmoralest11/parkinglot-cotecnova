@extends('layouts.adminlte')
@section('title', 'Listar Problemáticas')
@section('content')

    <h1>Listado de Problemáticas</h1>

    <hr>

    <a href="{{route('infrastructure.create')}}" class="btn btn-info">Registrar Problema</a>

    <hr>

    <table id="example" class="table table-striped table-bordered text-center" style="width:100%">
        <thead>
            <tr>
                <th>Tipo Necesidad</th>
                <th>Prioridad</th>
                <th>Estado Actual</th>
                <th>Fecha Creación</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($infrastructures as $infrastructure)
            <tr>
                <td>{{$infrastructure->tipo_necesidad}}</td>
                <td>{{$infrastructure->prioridad}}</td>
                <td>{{$infrastructure->estado}}</td>
                <td>{{$infrastructure->created_at}}</td>
                <td>
                    <a href="{{route('infrastructure.show', $infrastructure->id)}}" class="btn btn-primary">Ver</a>
                    <a href="{{route('infrastructure.edit', $infrastructure->id)}}" class="btn btn-warning">Editar</a>
                    <form action="{{route('infrastructure.destroy', $infrastructure->id)}}" method="POST">
                        @csrf()
                        {{method_field('DELETE')}}
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
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