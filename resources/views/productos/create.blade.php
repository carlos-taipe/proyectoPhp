@extends('layouts.plantilla')

@section('title','Productos | create')

@section('content')
<h1>En esta página se crearán nuevos productos.</h1>

<form action="{{route('productos.store')}}" method="POST">
    @csrf
    <label for="nombre">
        <span>Nombre:</span>
        <input name="nombre" id="nombre" type="text" value="{{old('nombre')}}">
    </label>

    @error('nombre')
        <br>
        <small>*{{$message}}</small>
        <br>
    @enderror
    <br>
    <label for="descripcion">
        <span>Descripción:</span>
        <input name="descripcion" id="descripcion" value="{{old('descripcion')}}">
    </label>
    @error('descripcion')
        <br>
        <small>*{{$message}}</small>
        <br>
    @enderror
    <br>
    <label for="categoria">
        <span>Categoria:</span>
        <input name="categoria" id="categoria" type="text" value="{{old('categoria')}}">
    </label>
    @error('categoria')
        <br>
        <small>*{{$message}}</small>
        <br>
    @enderror
    <br>
    <input type="submit" placeholder="Guardar">
</form>
@endsection