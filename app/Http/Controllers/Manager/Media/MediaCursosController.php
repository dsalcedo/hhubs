<?php

namespace App\Http\Controllers\Manager\Media;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Multimedia\Media;

class MediaCursosController extends Controller
{
    public function __construct(Request $request)
    {
        $this->req = $request;
    }

    public function test()
    {
        $archivo = $this->req->hasFile('archivo');

        return response()->json([$archivo, $this->req->file('archivo')]);
    }

    public function upload()
    {
        $archivo = $this->req->hasFile('archivo');
        $path = false;

        if($archivo){
            $path = $this->req->file('archivo')->store('public', 'curso');
        }

        return response()->json($path);
    }

    public function uploadTarjeta()
    {
        $archivo = $this->req->hasFile('archivo');
        $path    = false;

        if(!$archivo){
            return response()->json($path);
        }

        $path = $this->req->file('archivo')->store('tarjeta','curso');
        $path = Media::create([
            'tipo'    => 'tarjeta',
            'archivo' => $path
        ]);

        return response()->json($path);
    }
}
