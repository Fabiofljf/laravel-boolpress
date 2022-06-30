<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        # code...
        return Post::all();
        // $posts = Post::all();
        // return view('index', compact('posts'));
    }
}
