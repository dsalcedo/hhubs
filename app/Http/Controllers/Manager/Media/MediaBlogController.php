<?php

namespace App\Http\Controllers\Manager\Media;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Storage;

class MediaBlogController extends Controller
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

        $directory = public_path().'/media/blog';
        $path = false;

        if($archivo){
            $path = $this->req->file('archivo')->store('entradas', 'blog');
        }

        return response()->json($path);
    }
}
