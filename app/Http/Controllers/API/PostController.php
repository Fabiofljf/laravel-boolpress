<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return Post::with(['category','tags','user'])->orderByDesc('id')->paginate(5);
    }
    public function show($slug)
    {
        $post = Post::with(['category','tags','user'])->where('slug', $slug)->first();
        if ($post){
            return $post;
        }else {
            return response()->json ([
                'status_code' => 404,
                'status_message' => 'Nothing found'
            ]);
        }
    }
}
