<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use App\Models\Aviso;

class PrincipalController extends Controller
{
    public function index()
    {
        // Obtener noticias ordenadas por fecha
        $noticias = Noticia::orderBy('created_at', 'desc')
                            ->paginate(3);

        // Obtener avisos
        $avisos = Aviso::orderBy('created_at', 'desc')
                        ->get();

        return view(
            'principal',
            compact('noticias', 'avisos')
        );
    }
}