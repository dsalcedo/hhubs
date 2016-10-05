<?php

namespace App\Models\Suscripciones;

use Illuminate\Database\Eloquent\Model;

class CatalogoSuscripciones extends Model
{
    protected $table = 'catalogo_suscripciones';
    protected $fillable = [
        'titulo',
        'precio',
        'duracion',
        'activo',
        'publico'
    ];
}
