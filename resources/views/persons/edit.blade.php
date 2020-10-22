@extends('layouts.adminlte')
@section('title', 'Editar Usuario')
@section('content')

    <h1>Editar Usuario</h1> 
    
    <hr>

    <form action="{{route('persons.update', $person->id)}}" method="POST">
        @csrf()

        <input type="hidden" name="_method" value="put">

        <div class="row">
            <div class="form-group col-md-6">
                <label for="cedula">Cédula</label>
                <input type="number" name="cedula" class="form-control" placeholder="Ingrese Cédula del Usuario" value="{{$person->cedula}}">
            </div>
            
            <div class="form-group col-md-6">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" class="form-control" placeholder="Ingrese Nombre del Usuario" value="{{$person->name}}">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <label for="apellidos">Apellidos</label>
                <input type="text" name="apellidos" class="form-control" placeholder="Ingrese Apellidos del Usuario" value="{{$person->apellidos}}">
            </div>
            
            <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Ingrese Email del Usuario" value="{{$person->email}}">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <label for="telefono">Teléfono</label>
                <input type="text" name="telefono" class="form-control" placeholder="Ingrese Teléfono del Usuario" value="{{$person->telefono}}">
            </div>
            
            <div class="form-group col-md-6">
                <label for="direccion">Dirección</label>
                <input type="text" name="direccion" class="form-control" placeholder="Ingrese Dirección del Usuario" value="{{$person->direccion}}">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Editar Usuario</button>

        <a href="{{route('persons.index')}}" class="btn btn-success">Ir Atrás</a>
    </form>
@endsection