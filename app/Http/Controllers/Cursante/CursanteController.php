<?php

namespace App\Http\Controllers\Cursante;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CursanteController extends Controller
{
    public function __construct(Request $request)
    {
        $this->req = $request;
    }

    public function index()
    {
        $usuario = $this->req->user();
        $args = compact('usuario');
        return view('app.index', $args);
    }

    public function logout()
    {
        \Auth::logout();

        return redirect()->route('web.index');
    }
}
