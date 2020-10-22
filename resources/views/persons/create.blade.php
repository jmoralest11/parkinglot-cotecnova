@extends('layouts.adminlte')
@section('title', 'Crear Usuario')
@section('content')

<h1>Registrar Usuario</h1>

<hr>

<form action="{{route('persons.store')}}" method="POST" enctype="multipart/form-data">
    @csrf()

    <div class="row">
        <div class="form-group col-md-6">
            <label for="cedula">Cédula</label>
            <input type="number" name="cedula" class="form-control {{ $errors->has('cedula')? 'is-invalid' : '' }}" placeholder="Ingrese Cédula del Usuario" value="{{old('cedula')}}">
            @if($errors->has('cedula'))
            <div class="invalid-feedback">
                {{$errors->first('cedula')}}
            </div>
            @endif
        </div>

        <div class="form-group col-md-6">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control {{ $errors->has('nombre')? 'is-invalid' : '' }}" placeholder="Ingrese Nombre del Usuario" value="{{old('nombre')}}">
            @if($errors->has('nombre'))
            <div class="invalid-feedback">
                {{$errors->first('nombre')}}
            </div>
            @endif
        </div>
    </div>

    <div class="row">
        <div class="form-group col-md-6">
            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos" class="form-control {{ $errors->has('apellidos')? 'is-invalid' : '' }}" placeholder="Ingrese Apellidos del Usuario" value="{{old('apellidos')}}">
            @if($errors->has('apellidos'))
            <div class="invalid-feedback">
                {{$errors->first('apellidos')}}
            </div>
            @endif
        </div>

        <div class="form-group col-md-6">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control {{ $errors->has('email')? 'is-invalid' : '' }}" placeholder="Ingrese Email del Usuario" value="{{old('email')}}">
            @if($errors->has('email'))
            <div class="invalid-feedback">
                {{$errors->first('email')}}
            </div>
            @endif
        </div>
    </div>

    <div class="row">
        <div class="form-group col-md-6">
            <label for="telefono">Teléfono</label>
            <input type="text" name="telefono" class="form-control {{ $errors->has('telefono')? 'is-invalid' : '' }}" placeholder="Ingrese Teléfono del Usuario" value="{{old('telefono')}}">
            @if($errors->has('telefono'))
            <div class="invalid-feedback">
                {{$errors->first('telefono')}}
            </div>
            @endif
        </div>

        <div class="form-group col-md-6">
            <label for="direccion">Dirección</label>
            <input type="text" name="direccion" class="form-control {{ $errors->has('direccion')? 'is-invalid' : '' }}" placeholder="Ingrese Dirección del Usuario" value="{{old('direccion')}}">
            @if($errors->has('direccion'))
            <div class="invalid-feedback">
                {{$errors->first('direccion')}}
            </div>
            @endif
        </div>
    </div>

    <div class="form-group">
        <label for="imagen">Foto</label>
        <input type="file" name="imagen" class="form-control {{ $errors->has('imagen')? 'is-invalid' : '' }}" placeholder="Ingrese Foto del Usuario" value="{{old('imagen')}}">
        @if($errors->has('imagen'))
        <div class="invalid-feedback">
            {{$errors->first('imagen')}}
        </div>
        @endif
    </div>

    <button type="submit" class="btn btn-primary">Registrar Usuario</button>
    <a href="{{route('persons.index')}}" class="btn btn-success">Ir Atrás</a>
</form>
@endsection