<?php

namespace App\Http\Controllers\Manager\Cursos;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Cursos\Cursos;

class CursosLeccionesController extends Controller
{
    public function __construct(Request $request)
    {
        $this->req = $request;
    }

    /**
     * @param $curso
     * @return \Illuminate\Http\JsonResponse
     */
    public function createLeccion($curso)
    {
        $usuario = $this->req->user();

        $this->validate($this->req, [
            'titulo' => 'required|max:255',
            'descripcion' => 'required'
        ]);

        $curso = Cursos::find($curso);

        if(is_null( $curso )) {
            return response()->json(['success'=>false]);
        }

        $leccion = $curso->lecciones()->create([
            'titulo' => $this->req->get('titulo'),
            'descripcion' => $this->req->get('descripcion')
        ]);

        $leccion->index = $curso->lecciones->count();
        $leccion->save();

        return response()->json([
            'success' => true,
            'data'    => $leccion
        ]);

    }
}
