<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Navbar extends Model
{
    protected $table = 'navbar';

    protected $fillable = [
        'nombre',
        'url',
        'idpadre',
        'idhijo',
        'orden',
        'estatus'
    ];

    public function hijos()
    {
        return $this->hasMany(Navbar::class, 'idhijo', 'idpadre')
                    ->where('estatus',1)
                    ->orderBy('orden');
    }
}