<?php

namespace App\Http\Controllers\Cursante;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use CountryState;

class SuscripcionController extends Controller
{
    public function index()
    {

        $states = CountryState::getStates('MX');
        dd($states);
        dd(1);
    }
}
