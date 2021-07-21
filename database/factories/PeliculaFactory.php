<?php

namespace Database\Factories;

use App\Models\Pelicula;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PeliculaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pelicula::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->sentence();
        return [
            'nombre'=>$name, 
            'slug' => Str::slug($name, '-'),
            'descripcion'=>$this->faker->paragraph(), 
            'categoria'=>$this->faker->randomElement(['Terror', 'Drama', 'Suspenso','Animada'])
        ];
    }
}
