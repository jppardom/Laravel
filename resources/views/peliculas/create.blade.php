@extends('layouts.plantilla')

@section('title', 'Nueva Pelicula')

@section('content')
    <h1>Esta es la página para crear películas</h1>
    
    <form action="{{route ('peliculas.store')}}" method="POST">
        @csrf
        <label>
            Nombre:
            <br> 
            <input type="text" name="nombre" value="{{old('nombre')}}">
            <br>
            @error('nombre')
                <small>{{$message}}</small>
            @enderror
        </label>
        <br>
        <label>
            Descripcion:
            <br>
            <textarea name="descripcion" rows="5">{{old('descripcion')}}</textarea>
            <br>
            @error('descripcion')
                <small>{{$message}}</small>
            @enderror
        </label>
        <br>
        <label>
            Categoria: 
            <br>
            <input type="text" name="categoria"value="{{old('categoria')}}">
            <br>
            @error('categoria')
                <small>{{$message}}</small>
            @enderror
        </label>
        <br>
        <button type="submit">Enviar Formulario</button>
    </form>
@endsection
