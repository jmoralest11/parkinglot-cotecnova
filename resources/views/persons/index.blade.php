@extends('layouts.adminlte')
@section('title', 'Listar Usuarios')
@section('content')

    <h1>Listado de Usuarios</h1>

    <hr>

    <a href="{{route('persons.create')}}" class="btn btn-info">Registrar Usuario</a>

    <hr>

    <table id="example" class="table table-striped table-bordered text-center" style="width:100%">
        <thead>
            <tr>
                <th>Foto</th>
                <th>Cédula</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Fecha Creación</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($persons as $person)
            <tr>
                <td><img src="{{asset('storage/'.$person->imagen)}}" width="50" class="img-thumbnail img-fluid"></td>
                <td>{{$person->cedula}}</td>
                <td>{{$person->name}}</td>
                <td>{{$person->apellidos}}</td>
                <td>{{$person->email}}</td>
                <td>{{$person->telefono}}</td>
                <td>{{$person->created_at}}</td>
                <td>
                    <a href="{{route('persons.show', $person->id)}}" class="btn btn-primary">Ver</a>
                    <a href="{{route('persons.edit', $person->id)}}" class="btn btn-warning">Editar</a>
                    <form action="{{route('persons.destroy', $person->id)}}" method="POST">
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