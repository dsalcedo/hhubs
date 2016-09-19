<?php

namespace App\Models\Catalogo;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    protected $table = 'roles';
    protected $fillable = [
        'clave',
        'titulo'
    ];
}
