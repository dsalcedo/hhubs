<?php

namespace App\Models\Cursos;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class Cursos extends Model
{
    use Sluggable;
    use SluggableScopeHelpers;

    protected $table = 'cursos';
    protected $fillable = [
        'titulo',
        'contenido',
        'estado',
        'carrera_id',
        'tarjeta',
        'cover',
    ];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'titulo'
            ]
        ];
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
