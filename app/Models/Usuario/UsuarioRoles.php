<?php

namespace App\Models\Usuario;

use Illuminate\Database\Eloquent\Model;

class UsuarioRoles extends Model
{
    protected $table = 'usuario_roles';
    protected $fillable = [
        'usuario_id',
        'rol_id'
    ];
}
