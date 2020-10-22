@extends('layouts.adminlte')
@section('title', 'Registrar Vehículo')
@section('content')

<h1>Registrar Vehículo</h1>

<hr>

<form action="{{route('vehicles.store')}}" method="POST">
    @csrf()

    <div class="form-group">
        <label for="placa">Placa</label>
        <input type="text" name="placa" class="form-control {{ $errors->has('placa')? 'is-invalid' : '' }}" placeholder="Ingrese Placa del Vehículo" value="{{old('placa')}}">
        @if($errors->has('placa'))
        <div class="invalid-feedback">
            {{$errors->first('placa')}}
        </div>
        @endif
    </div>

    <div class="form-group">
        <label for="marca">Marca</label>
        <select name="marca" class="form-control">
            <option value="Renault">Renault</option>
            <option value="Toyota">Toyota</option>
            <option value="Yamaha">Yamaha</option>
            <option value="Audi">Audi</option>
        </select>
    </div>


    <div class="form-group">
        <label for="color">Color</label>
        <select name="color" class="form-control">
            <option value="Rojo">Rojo</option>
            <option value="Negro">Negro</option>
            <option value="Blanco">Blanco</option>
            <option value="Amarillo">Amarillo</option>
            <option value="Verde">Verde</option>
            <option value="Cafe">Café</option>
            <option value="Azul">Azul</option>
            <option value="Plateado">Plateado</option>
            <option value="Gris">Gris</option>
        </select>
    </div>

    <div class="form-group">
        <label for="person_id">Propietario Vehículo</label>
        <select name="person_id" class="form-control">
            @foreach ($persons as $person)
                <option value="{{$person->id}}">{{$person->cedula}} - {{$person->name}} {{$person->apellidos}}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Registrar Vehículo</button>

    <a href="{{route('vehicles.index')}}" class="btn btn-success">Ir Atrás</a>
</form>
@endsection