<?php

namespace App\Http\Controllers;

// use App\Models\Post;
use App\Models\post;
use Illuminate\Http\Request;
// use App\Http\Requests\StorePostRequest;
// use App\Http\Requests\UpdatePostRequest;

class PostController extends Controller
{
    public function index()
    {
        // return 'okee';
        return view('posts', [
            "title" => "ALL Post",
            // "posts" => Post::all()
            "posts" => post::latest()->get(),
            "active" => 'posts'
        ]);
    }

    public function show(post $post)
    {
        return view('post', [
            "title" => "Single Post",
            "post"  => $post,
            "active" => 'posts'

        ]);
    }
}
