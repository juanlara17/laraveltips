<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {
//        $user = User::find(2);
//        $posts = Post::where('user_id', $user->id)->get();
        $posts = Post::get();
//        $users = User::where('phone', 1)->get();
//        dd($users);
//        $posts = Post::whereBelongsTo($users)->get();

//        return view('post.index', compact('posts'));

        return view('post.index')
            ->withPosts($posts);
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
