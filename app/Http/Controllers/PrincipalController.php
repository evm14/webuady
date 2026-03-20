<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use App\Models\Aviso;

class PrincipalController extends Controller
{
    public function index()
    {
        // Noticias ACTIVAS
        $noticias = Noticia::with('imagen')
                        ->where('estatus', 1)
                        ->orderBy('created_at', 'desc')
                        ->paginate(3);

        // Avisos
        $avisos = Aviso::orderBy('created_at', 'desc')
                        ->get();

        return view(
            'principal',
            compact('noticias', 'avisos')
        );
    }
}