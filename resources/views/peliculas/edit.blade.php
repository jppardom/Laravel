@extends('layouts.plantilla')

@section('title', 'Modificar Pelicula')

@section('content')
    <h1>Esta se podrá modificar datos de una pelicula</h1>
    
    <form action="{{route ('peliculas.update', $pelicula)}}" method="POST">
        @csrf
        @method('PUT')
        <label>
            Nombre:
            <br> 
            <input type="text" name="nombre" value="{{$pelicula->nombre}}">
        </label>
        <br>
        <label>
            Descripcion:
            <br>
            <textarea name="descripcion" rows="5">{{$pelicula->descripcion}}</textarea>
        </label>
        <br>
        <label>
            Categoria: 
            <br>
            <input type="text" name="categoria" value="{{$pelicula->categoria}}">
        </label>
        <br>
        <button type="submit">Enviar Formulario</button>
    </form>
@endsection
