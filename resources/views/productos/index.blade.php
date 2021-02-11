@extends('layouts.plantilla')

@section('title','Productos')

@section('content')
    <h1>Bienvenido a la página productos.</h1>
    <a href="{{route('productos.create')}}">Crear nuevo producto</a>
    <ul>
        @foreach ($productos as $producto)
            <li>
                <a href="{{route('productos.show',$producto)}}">{{$producto->nombre}}</a>
            </li>
        @endforeach
    </ul>
    {{$productos->links()}}
@endsection
