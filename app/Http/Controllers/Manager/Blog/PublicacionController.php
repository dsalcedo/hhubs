<?php

namespace App\Http\Controllers\Manager\Blog;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;
use App\Models\Blog\Posts;

class PublicacionController extends Controller
{
    public function __construct(Request $request)
    {
        $this->req = $request;
    }

    public function agregarPublicacion()
    {
        return view('manager.blog.agregarPublicacion');
    }

    public function createPublicacion()
    {
        Validator::make($this->req->all(), [
            'titulo'    => 'required|max:255',
            'contenido' => 'required',
            'cover'     => 'required',
            'estado'    => 'required'
        ]);

        $usuario = $this->req->user();

        $post = new Posts([
            'usuario_id' => $usuario->id,
            'titulo'     => $this->req->get('titulo'),
            'contenido'  => $this->req->get('contenido'),
            'destacado'  => (!is_null($this->req->get('destacado'))) ? true : false,
            'cover'      => $this->req->get('cover'),
            'estado'     => $this->req->get('estado'),
        ]);

        $post->save();


        return redirect()->route('manager.blog.index');
    }
}
