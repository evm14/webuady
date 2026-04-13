<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatVinculoPrincipal extends Model
{
    protected $table = 'cat_vinculos_principales';

    protected $fillable = [
        'nombre',
        'url',
        'orden',
        'estatus'
    ];
}