<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\CatImagen;

class Banner extends Model
{
    use HasFactory;

    protected $table = 'banner';

    protected $fillable = [
        'titulo',
        'subtitulo',
        'cat_imagen_id',
        'btn1_activo',
        'btn1_texto',
        'btn1_url',
        'btn2_activo',
        'btn2_texto',
        'btn2_url',
        'estatus',
        'orden'
    ];

    public function imagen()
    {
        return $this->belongsTo(CatImagen::class, 'cat_imagen_id');
    }
}