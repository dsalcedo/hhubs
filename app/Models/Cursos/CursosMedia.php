<?php

namespace App\Models\Cursos;

use Illuminate\Database\Eloquent\Model;

class CursosMedia extends Model
{
    protected $table    = 'cursos_media';
    protected $fillable = [
        'curso_id',
        'media_id'
    ];

}
