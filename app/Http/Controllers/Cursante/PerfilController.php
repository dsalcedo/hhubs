<?php

namespace App\Http\Controllers\Cursante;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use CountryState;


class PerfilController extends Controller
{
    public function __construct(Request $request)
    {
        $this->req = $request;
    }

    public function index()
    {
        $usuario = $this->req->user();
        $estados = CountryState::getStates('MX');
        $args    = compact('usuario', 'estados');
        return view('app.perfil', $args);
    }

    public function update()
    {
        dd(1);
    }
}
