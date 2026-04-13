<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;

Route::get('/', [PrincipalController::class,'index'])->name('inicio');

Route::view('/aspirantes','aspirantes')->name('aspirantes');
Route::view('/estudiantes','estudiantes')->name('estudiantes');
Route::view('/docentes','docentes')->name('docentes');
Route::view('/egresados','egresados')->name('egresados');
Route::fallback(function () {
    return response()->view('404', [], 404);
});