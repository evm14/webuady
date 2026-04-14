<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Models\Egresado;

Route::get('/', [PrincipalController::class,'index'])->name('inicio');

Route::view('/aspirantes','aspirantes')->name('aspirantes');
Route::view('/estudiantes','estudiantes')->name('estudiantes');
Route::view('/docentes','docentes')->name('docentes');

Route::get('/egresados', function () {
    $egresados = Egresado::orderBy('id')->get();
    return view('egresados', compact('egresados'));
})->name('egresados');

Route::get('/buscar', function () {
    return "Resultado de búsqueda: " . request('q');
});

Route::fallback(function () {
    return response()->view('404', [], 404);
});