@extends('layouts.plantilla')

@section('title', 'Mostrar Pelicula'. $peliculas->nombre)

@section('content')
    <h1>Bienvenido a la película: {{$peliculas->nombre}}</h1>
    <a href={{route('pelicula.index')}}>Volver a Peliculas</a>
    <p><strong>Categoria:  </strong>{{$peliculas->categoria}}</p>
    <p>{{$peliculas->descripcion}}</p>

@endsection
