@extends('layouts.plantilla')

@section('title', 'Mostrar Pelicula'. $pelicula->nombre)

@section('content')
    <h1>Bienvenido a la película: {{$pelicula->nombre}}</h1>
    <a href={{route('peliculas.index')}}>Volver a Pelicula</a>
    <br>
    <a href={{route('peliculas.edit', $pelicula)}}>Editar Pelicula</a>
    <p><strong>Categoria:  </strong>{{$pelicula->categoria}}</p>
    <p>{{$pelicula->descripcion}}</p>

    <form action="{{route('peliculas.destroy', $pelicula)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar Pelicula</button>
    </form>

@endsection
