<?php

namespace Database\Factories;
use App\Models\CatImagen;
use App\Models\Noticia;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Noticia>
 */
class NoticiaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
       return [
        'titulo' => fake()->sentence(4),
        'contenido' => fake()->paragraph(3),
        'cat_imagen_id' => CatImagen::inRandomOrder()->first()?->id ?? 1,
        'estatus' => 1,
    ];
    }
}
