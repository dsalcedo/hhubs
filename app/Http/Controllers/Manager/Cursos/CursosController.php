<?php

namespace App\Http\Controllers\Manager\Cursos;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CursosController extends Controller
{
    public function index()
    {
        return view('manager.cursos.index');
    }
}
