<?php

namespace App\Models\Blog;

use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Model;


class Posts extends Model
{
    use Sluggable;
    use SluggableScopeHelpers;

    protected $table = 'posts';
    protected $fillable = [
        'usuario_id',
        'titulo',
        'slug',
        'estado',
        'destacado',
        'cover',
        'contenido'
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

    public function autor()
    {
        return $this->belongsTo(\App\Models\Usuario\Usuario::class);
    }


}
