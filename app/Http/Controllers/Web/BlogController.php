<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Blog\Posts;

class BlogController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $posts = Posts::where('estado','publicado')->orderBy('id','DESC')->paginate(10);

        return view('web.blog.index', compact('posts'));
    }

    public function singlePost($post)
    {
        $args = compact('post');
        return view('web.blog.single', $args);
    }
}
