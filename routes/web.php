<?php

use App\Http\Controllers\HomeControllers;
use App\Http\Controllers\PeliuclasControllers;
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

Route::get('peliculas', [PeliuclasControllers::class, 'index'])->name('pelicula.index');

Route::get('peliculas/nueva', [PeliuclasControllers::class, 'create'])->name('pelicula.create');

Route::get('peliculas/{id}', [PeliuclasControllers::class, 'show'])->name('pelicula.show');


// Route::get('peliculas/{pelicualas}/{categoria?}', function ($peliculas, $categoria = null) {
//     if ($categoria==null){
//         return "Bienvenidos a la pelicula $peliculas, de la categoría $categoria";
//     }else{
//         "Bienvenido a la película: $peliculas";
//     }
    
// });


