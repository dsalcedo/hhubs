<?php

namespace App\Http\Controllers\Manager\Blog;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Blog\Posts;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Posts::orderBy('id','DESC')->paginate(10);
        $args  = compact('posts');
        return view('manager.blog.index', $args);
    }
}
