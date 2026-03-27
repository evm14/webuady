<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use App\Models\Aviso;
use App\Models\Banner;
use App\Models\CatVinculoPrincipal;

class PrincipalController extends Controller
{
    public function index()
    {
        $noticias = Noticia::with('imagen')
                        ->where('estatus',1)
                        ->latest()
                        ->paginate(3);

        $avisos = Aviso::latest()->get();

        $banners = Banner::with('imagen')
                        ->where('estatus',1)
                        ->orderBy('orden')
                        ->get();

        $menu = CatVinculoPrincipal::where('estatus',1)
            ->orderBy('orden')
            ->get();

        return view('principal', compact('noticias','avisos','banners','menu'));
    }
}