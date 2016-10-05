<?php

namespace App\Http\Controllers\Manager\Suscripciones;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Suscripciones\CatalogoSuscripciones;

class SuscripcionesController extends Controller
{
    public function __construct(Request $request)
    {
        $this->req = $request;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $suscripciones = CatalogoSuscripciones::all();
        $args = compact('suscripciones');
        return view('manager.suscripciones.index', $args);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('manager.suscripciones.crear');
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store()
    {

        $this->validate($this->req, [
            'titulo'   => 'required|max:255',
            'duracion' => 'required|max:255',
            'precio'   => 'required|max:255',
            'activo'   => 'required'
        ]);

        CatalogoSuscripciones::create([
            'titulo'   => $this->req->get('titulo'),
            'duracion' => $this->req->get('duracion'),
            'precio'   => $this->req->get('precio'),
            'activo'   => ($this->req->get('activo') == 'si') ? true : false
        ]);

        return redirect()->route('manager.suscripciones');
    }

    /**
     * @param $suscripcion
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($suscripcion)
    {
        $args = compact('suscripcion');
        return view('manager.suscripciones.editar', $args);
    }

    public function update($suscripcion)
    {
        $this->validate($this->req, [
            'titulo'   => 'required|max:255',
            'duracion' => 'required|max:255',
            'precio'   => 'required|max:255',
            'activo'   => 'required'
        ]);

        $suscripcion->titulo   = $this->req->get('titulo');
        $suscripcion->duracion = $this->req->get('duracion');
        $suscripcion->precio   = $this->req->get('precio');
        $suscripcion->activo   = ($this->req->get('activo') == 'si') ? true : false;
        $suscripcion->save();

        return redirect()->route('manager.suscripciones');
    }
}
