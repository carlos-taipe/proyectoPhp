@extends('layouts.plantilla')
@section('title', 'Contáctanos')

@section('content')
    <h1>Déjanos un mensaje.</h1>
    <form action="{{route('contactanos.store')}}" method="POST">
        @csrf
        <label for="nombre">
            <span>Nombre:</span>
            <br>
            <input type="text" id="nombre" name="nombre" value="{{old('nombre')}}">
        </label>
        @error('nombre')
             <p><strong>{{$message}}</strong></p> 
        @enderror
        <br>
        <label for="correo">
            <span>Correo:</span>
            <br>
            <input type="text" id="correo" name="correo" value="{{old('correo')}}">
        </label>
        @error('correo')
             <p><strong>{{$message}}</strong></p> 
        @enderror
        <br>
        <label for="mensaje">
            <span>Mensaje:</span>
            <br>
            <input type="text" id="mensaje" name="mensaje" value="{{old('mensaje')}}">
        </label>
        @error('mensaje')
             <p><strong>{{$message}}</strong></p> 
        @enderror
        <br>
        <input type="submit" value="Enviar Respuesta">
    </form>

    @if (session('info'))
        <script>
            alert('{{session('info')}}')
        </script>
    @endif
@endsection