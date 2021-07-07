@extends('layouts.plantilla')

@section('title', 'Nueva Pelicula')

@section('content')
    <h1>Bienvenido a la páginas de peliculas</h1>
    <a href={{route('pelicula.create')}}>Crear Curso</a>
    <ul>
        @foreach ($peliculas as $pelicula)
            <li>
                <a href={{route('pelicula.show', $pelicula->id)}}>{{$pelicula->nombre}}</a>
                
            </li>
        @endforeach
    </ul>
    {{$peliculas->links()}}
@endsection