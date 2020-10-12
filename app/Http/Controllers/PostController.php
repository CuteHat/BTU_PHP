<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function add(Request $request)
    {
        $post = new Post($request->all());
        $post->save();
        $posts = Post::all();
        return view('posts')->with("posts",$posts);
    }
}
