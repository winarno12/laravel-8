<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\post as ModelsPost;
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
            "posts" => ModelsPost::latest()->get(),
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
