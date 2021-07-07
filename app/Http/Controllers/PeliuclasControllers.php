<?php

namespace App\Http\Controllers;

use App\Models\Pelicula;
use Illuminate\Http\Request;

class PeliuclasControllers extends Controller
{
    public function index(){
        $peliculas = Pelicula::paginate();
        return view("peliculas.index", compact('peliculas'));
    }

    public function create(){
        return view("peliculas.create");
    }

    public function show($id){
        $peliculas = Pelicula::find($id);
        return view("peliculas.show", compact('peliculas'));
    }
}
