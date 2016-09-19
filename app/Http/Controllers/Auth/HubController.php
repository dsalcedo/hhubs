<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\Usuario\Usuario;

class HubController extends Controller
{
    protected $redirectTo = '/app';
    protected $loginPath = '/';
    protected $redirectAfterLogout = '/';

    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function registro(Request $request)
    {
        Validator::make($request->all(), [
            '_token' => 'required',
            'nombre' => 'required|max:255',
            'email' => 'required|email|max:255|unique:usuarios',
            'password' => 'required|min:6|max:255',

        ]);

        $usuario = $this->create($request->all());

        Auth::loginUsingId($usuario->id);

        return redirect()->route('app.index');
    }

    protected function create(array $data)
    {
        $usuario = Usuario::create([
            'nombre' => $data['nombre'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'mailing' => isset($data['mailing'])
        ]);

        return $usuario;
    }
}
