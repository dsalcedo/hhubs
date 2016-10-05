<?php

namespace App\Models\Multimedia;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $table    = 'media';
    protected $fillable = [
        'tipo',
        'archivo'
    ];
}
