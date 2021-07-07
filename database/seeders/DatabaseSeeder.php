<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Pelicula;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        Pelicula::factory(100)->create();
    }
}
