<?php

use App\Http\Controllers\HomeControllers;
use App\Http\Controllers\PeliculasControllers;
use App\Models\Pelicula;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', HomeControllers::class);  

Route::get('peliculas', [PeliculasControllers::class, 'index'])->name('peliculas.index');

Route::get('peliculas/nueva', [PeliculasControllers::class, 'create'])->name('peliculas.create');

Route::post('peliculas', [PeliculasControllers::class, 'store'])->name('peliculas.store');

Route::get('peliculas/{pelicula}', [PeliculasControllers::class, 'show'])->name('peliculas.show');

Route::get('peliculas/{pelicula}/edit',[PeliculasControllers::class, 'edit'])->name('peliculas.edit');

Route::put('peliculas/{pelicula}',[PeliculasControllers::class, 'update'])->name('peliculas.update');

Route::delete('peliculas/{pelicula}',[PeliculasControllers::class, 'destroy'])->name('peliculas.destroy');


// Route::get('peliculas/{pelicualas}/{categoria?}', function ($peliculas, $categoria = null) {
//     if ($categoria==null){
//         return "Bienvenidos a la pelicula $peliculas, de la categoría $categoria";
//     }else{
//         "Bienvenido a la película: $peliculas";
//     }
    
// });


