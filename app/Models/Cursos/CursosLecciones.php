<?php

namespace App\Models\Cursos;

use Illuminate\Database\Eloquent\Model;

class CursosLecciones extends Model
{
    protected $table    = 'cursos_lecciones';
    protected $fillable = [
        'curso_id',
        'titulo',
        'descripcion',
        'index',
        'estado'
    ];
}
