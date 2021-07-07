<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pelicula;

class PeliculaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pelicula = new Pelicula();
        $pelicula->nombre = 'Pelicula 1';
        $pelicula->descripcion = 'Descripción de la Pelicula 1';
        $pelicula->categoria = 'Categoria de la Pelicula 1';
        $pelicula->save();

        $pelicula1 = new Pelicula();
        $pelicula1->nombre = 'Pelicula 2';
        $pelicula1->descripcion = 'Descripción de la Pelicula 2';
        $pelicula1->categoria = 'Categoria de la Pelicula 2';
        $pelicula1->save();

        $pelicula3 = new Pelicula();
        $pelicula3->nombre = 'Pelicula 3';
        $pelicula3->descripcion = 'Descripción de la Pelicula 3';
        $pelicula3->categoria = 'Categoria de la Pelicula 3';
        $pelicula3->save();
    }
}
