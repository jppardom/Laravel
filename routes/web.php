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

Route::get('peliculas', [PeliuclasControllers::class, 'index'])->name('peliculas.index');

Route::get('peliculas/nueva', [PeliuclasControllers::class, 'create'])->name('peliculas.create');

Route::post('peliculas', [PeliuclasControllers::class, 'store'])->name('peliculas.store');

Route::get('peliculas/{pelicula}', [PeliuclasControllers::class, 'show'])->name('peliculas.show');

Route::get('peliculas/{pelicula}/edit',[PeliuclasControllers::class, 'edit'])->name('peliculas.edit');

Route::put('peliculas/{pelicula}',[PeliuclasControllers::class, 'update'])->name('peliculas.update');


// Route::get('peliculas/{pelicualas}/{categoria?}', function ($peliculas, $categoria = null) {
//     if ($categoria==null){
//         return "Bienvenidos a la pelicula $peliculas, de la categoría $categoria";
//     }else{
//         "Bienvenido a la película: $peliculas";
//     }
    
// });


