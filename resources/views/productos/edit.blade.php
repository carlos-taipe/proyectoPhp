@extends('layouts.plantilla')

@section('title','Editar producto' . $producto->nombre)

@section('content')
<form action="{{route('productos.update',$producto)}}" method="POST">
    @csrf
    @method('put')
    <label for="nombre">
        <span>Nombre:</span>
        <input name="nombre" id="nombre" type="text" value="{{old('nombre',$producto->nombre)}}" >
    </label>
    @error('nombre')
        <small>{{$message}}</small>
        <br>
    @enderror   
    <br>
    <label for="descripcion">
        <span>Descripción:</span>
        <input name="descripcion" id="descripcion" value="{{old('descripcion',$producto->descripcion)}}">
    </label>
    @error('descripcion')
        <small>{{$message}}</small>
    @enderror 
    <br>
    <label for="categoria">
        <span>Categoria:</span>
        <input name="categoria" id="categoria" type="text" value="{{old('categoria',$producto->categoria)}}">
    </label>
    @error('categoria')
        <small>{{$message}}</small>
    @enderror 
    <br>
    <input type="submit" placeholder="Guardar">
</form> 
@endsection