<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\CatImagen;

class Noticia extends Model
{
    use HasFactory; //

    protected $table = 'noticias';

    protected $fillable = [
        'titulo',
        'contenido',
        'cat_imagen_id',
        'estatus'
    ];

    public function imagen()
    {
        return $this->belongsTo(CatImagen::class, 'cat_imagen_id');
    }
}