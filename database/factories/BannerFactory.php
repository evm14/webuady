<?php

namespace Database\Factories;
use App\Models\CatImagen;
use App\Models\Banner;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Banner>
 */
class BannerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'titulo' => fake()->sentence(3),
        'subtitulo' => fake()->sentence(6),
        'cat_imagen_id' => CatImagen::inRandomOrder()->first()?->id ?? 1,
        'btn1_activo' => 1,
        'btn1_texto' => 'Ver más',
        'btn1_url' => '#',
        'btn2_activo' => 0,
        'estatus' => 1,
        'orden' => fake()->numberBetween(1,10)
    ];
    }
}
