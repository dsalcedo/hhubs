<?php

namespace App\Http\Controllers\Cursante;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CursanteController extends Controller
{
    public function index()
    {
        return view('app.index');
    }
}
