<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::get();
        return view('post.index', compact('posts'));
    }

    public function store(PostRequest $request)
    {
//        dd($request->all());
        $post = new Post();

        $post->name = $request->name;
        $post->description = $request->description;
        $post->user_id = $request->user;

        $post->save();

        return redirect()->route('dashboard');
    }
}
