<?php

namespace App\Http\Controllers\Manager;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ManagerController extends Controller
{
    public function index()
    {
        return view('manager.index');
    }

    public function logout()
    {
        \Auth::logout();

        return redirect()->route('web.index');
    }
}
