<?php

namespace App\Http\Controllers\Manager\Cursos;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;
use App\Models\Cursos\Cursos;
use App\Models\Carreras\Carreras;

class CursosController extends Controller
{
    public function __construct(Request $request)
    {
        $this->req = $request;
    }

    public function index()
    {
        $cursos = Cursos::all();
        return view('manager.cursos.index', compact('cursos'));
    }

    public function crearCurso()
    {
        $carreras = Carreras::where('estado', 'publicada')->pluck('titulo', 'id');

        return view('manager.cursos.crear', compact('carreras'));
    }

    public function create()
    {
        Validator::make($this->req->all(), [
            'titulo'    => 'required|max:255',
            'contenido' => 'required',
            'estado'    => 'required',
            'carrera_id'=> 'required'
        ]);

        $curso = new Cursos([
            'titulo'     => $this->req->get('titulo'),
            'contenido'  => $this->req->get('contenido'),
            'estado'     => $this->req->get('estado'),
            'carrera_id' => $this->req->get('carrera_id'),
            'gratuito'   => (is_null($this->req->get('gratuito'))) ? false : true
        ]);

        $curso->save();

        return redirect()->route('manager.cursos.editar', $curso->slug);
    }

    public function curso($curso)
    {
        $args = compact('curso');
        return view('manager.cursos.curso.index', $args);
    }

    public function updateCurso($curso)
    {
        $carreras = Carreras::where('estado', 'publicada')->pluck('titulo', 'id');
        return view('manager.cursos.curso.editar', compact('curso', 'carreras'));
    }

}
