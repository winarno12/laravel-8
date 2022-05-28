<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
// use App\Http\Requests\StorePostRequest;
// use App\Http\Requests\UpdatePostRequest;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            "title" => "ALL Post",
            // "posts" => Post::all()
            "posts" => Post::latest()->get(),
            "active" => 'posts'
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "Single Post",
            "post"  => $post,
            "active" => 'posts'

        ]);
    }
}
