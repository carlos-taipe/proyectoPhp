@extends('layouts.plantilla')

@section('title','Producto ' . $producto->nombre)

@section('content')
    <a href="{{route('productos.index')}}">Volver a productos.</a>
    <br>
    <a href="{{route('productos.edit',$producto)}}">Editar producto</a>
    <h1>Mostrando el producto: {{$producto->nombre}}</h1>
    <p><strong>Categoria:</strong>{{$producto->categoria}}</p>
    <br>
    <form action="{{route('productos.destroy',$producto)}}" method="POST">
        @csrf
        @method('delete')
        <input type="submit" value="Eliminar">
    </form>
@endsection
