<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

// MODELOS
use App\Models\Noticia;
use App\Models\Banner;
use App\Models\Aviso;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // GENERAR DATOS DE PRUEBA

        Noticia::factory(6)->create();

        Banner::factory(3)->create();

        Aviso::factory(4)->create();
    }
}