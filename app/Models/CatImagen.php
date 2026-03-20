<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatImagen extends Model
{
    protected $table = 'cat_imagen';

    protected $fillable = [
        'nombre',
        'ruta'
    ];

    public function noticias()
    {
        return $this->hasMany(Noticia::class);
    }
}