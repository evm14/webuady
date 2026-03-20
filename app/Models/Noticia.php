<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    protected $table = 'noticias';

    protected $fillable = [
        'titulo',
        'contenido',
        'cat_imagen_id',
        'estatus'
    ];

    public function imagen()
    {
        return $this->belongsTo(CatImagen::class,'cat_imagen_id');
    }
}