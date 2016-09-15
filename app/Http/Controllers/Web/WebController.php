<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class WebController extends Controller
{
    public function index()
    {
        return view('web.index');
    }

    public function curso()
    {
        return view('web.curso');
    }

    public function single()
    {
        return view('web.single');
    }
}
