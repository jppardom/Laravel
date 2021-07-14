<?php

namespace App\Http\Controllers;

use App\Models\Pelicula;
use Illuminate\Http\Request;
use App\Http\Requests\StorePelicula;

class PeliculasControllers extends Controller
{
    public function index(){
        $peliculas = Pelicula::orderBy('id', 'desc')->paginate();
        return view("peliculas.index", compact('peliculas'));
    }

    public function create(){
        return view("peliculas.create");
    }
    public function store(StorePelicula $request){
        $pelicula = Pelicula::create($request->all());
        return redirect()->route('peliculas.show', $pelicula);
    }

    public function show(Pelicula $pelicula){
        return view("peliculas.show", compact('pelicula'));
    }

    public function edit(Pelicula $pelicula){
        return view('peliculas.edit', compact('pelicula'));
    }
    public function update (Pelicula $pelicula, StorePelicula $request){
        $pelicula->update($request->all());
        return redirect()->route('peliculas.show', $pelicula);
    }
}
