<?php

namespace App\Models\Usuario;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'email', 'password', 'mailing'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function roles()
    {
        return $this->belongsToMany('App\Models\Catalogo\Roles', 'usuario_roles', 'usuario_id', 'rol_id');
    }
    /**
     * @param $role
     * @return bool
     */
    public function hasRole($role)
    {
        $rolesUsuario = $this->roles()->pluck('clave')->toArray();
        $hasRol = false;
        if(!is_array($role)){
            $hasRol = in_array($role, $rolesUsuario);
        }else{
            foreach ($role as $rol){
                if(in_array($rol, $rolesUsuario)){
                    $hasRol = true;
                    break;
                }
            }
        }
        return $hasRol;
    }
}
