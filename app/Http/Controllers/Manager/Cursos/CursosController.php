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
        return view('manager.cursos.index');
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
            'carrera_id'=> 'required',
            'tarjeta'   => 'required',
            'cover'     => 'required'
        ]);

        $curso = new Cursos([
            'titulo'     => $this->req->get('titulo'),
            'contenido'  => $this->req->get('contenido'),
            'estado'     => $this->req->get('estado'),
            'carrera_id' => 1,
            'tarjeta'    => $this->req->get('tarjeta'),
            'cover'      => $this->req->get('cover'),
        ]);

        $curso->save();

        return redirect()->route('manager.curso', $curso->slug);
    }

    public function curso($curso)
    {
        $args = compact('curso');
        return view('manager.cursos.curso.index', $args);
    }
}
