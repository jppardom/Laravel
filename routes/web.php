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

Route::resource('peliculas', PeliculasControllers::class);