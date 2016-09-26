<?php

namespace App\Http\Controllers\Manager\Carreras;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;
use App\Models\Carreras\Carreras;


class CarrerasController extends Controller
{
    public function __construct(Request $request)
    {
        $this->req = $request;
    }

    public function index()
    {
        $carreras = Carreras::all();
        return view('manager.carreras.index', compact('carreras'));
    }

    public function crearCarrera()
    {
        return view('manager.carreras.crear');
    }

    public function create()
    {
        Validator::make($this->req->all(),[
            'titulo' => 'required|max:255',
            'estado' => 'required'
        ]);

        $carrera = new Carreras([
            'titulo' => $this->req->get('titulo'),
            'estado' => $this->req->get('estado')
        ]);

        $carrera->save();

        return redirect()->route('manager.carreras');
    }

    public function editarCarrera($carrera)
    {
        return view('manager.carreras.editar', compact('carrera'));
    }

    public function updateCarrera($carrera)
    {

        Validator::make($this->req->all(), [
            'titulo'    => 'required|max:255',
            'estado'    => 'required'
        ]);
        $carrera->titulo = $this->req->get('titulo');
        $carrera->estado = $this->req->get('estado');
        $carrera->save();

        return redirect()->route('manager.carreras');

    }
}
