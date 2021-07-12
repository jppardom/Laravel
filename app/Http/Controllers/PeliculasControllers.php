<?php

namespace App\Http\Controllers;

use App\Models\Pelicula;
use Illuminate\Http\Request;

class PeliculasControllers extends Controller
{
    public function index(){
        $peliculas = Pelicula::orderBy('id', 'desc')->paginate();
        return view("peliculas.index", compact('peliculas'));
    }

    public function create(){
        return view("peliculas.create");
    }
    public function store(Request $request){

        $request->validate([
            'nombre'=> 'required',
            'descripcion' => 'required',
            'categoria' => 'required'
        ]);

        $pelicula = new Pelicula();
        $pelicula->nombre = $request->nombre;
        $pelicula->descripcion = $request->descripcion;
        $pelicula->categoria = $request->categoria;
        $pelicula->save();
        return redirect()->route('peliculas.show', $pelicula);
    
    }

    public function show(Pelicula $pelicula){
        return view("peliculas.show", compact('pelicula'));
    }

    public function edit(Pelicula $pelicula){
        return view('peliculas.edit', compact('pelicula'));
    }
    public function update (Pelicula $pelicula, Request $request){
        $request->validate([
            'nombre'=> 'required',
            'descripcion' => 'required',
            'categoria' => 'required'
        ]);

        $pelicula->nombre = $request->nombre;
        $pelicula->descripcion = $request->descripcion;
        $pelicula->categoria = $request->categoria;
        $pelicula->save();
        return redirect()->route('peliculas.show', $pelicula);

    }
}
