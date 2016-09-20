<?php

namespace App\Http\Controllers\Manager\Blog;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PublicacionController extends Controller
{
    public function agregarPublicacion()
    {
        return view('manager.blog.agregarPublicacion');
    }
}
