<?php

namespace App\Http\Controllers;

use App\Models\post;
use App\Models\Category;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // // dd('okee');
        // echo "dhsdh";
        // exit;
        // return (post::where('user_id', auth()->user()->id)->get());
        return view('dashboard.post.index', [
            'posts' => post::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.post.create', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->file('image')->store('post-images');
        // ddd($request);
        $validateData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:posts',
            'image' => 'file|max:1024',
            'category_id' => 'required',
            'body' => 'required'
        ]);
        if ($request->file('image')) {
            # code...
            $validateData['image'] = $request->file('image')->store('post-image');
        }
        // return $request;

        $validateData['user_id'] = auth()->user()->id;
        $validateData['excerpt'] = Str::limit(strip_tags($request->body), 200);
        post::create($validateData);
        return redirect('/dashboard/post')->with('success', 'Your Post Succesfully Has Been Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(post $post)
    {
        return view('dashboard.post.show', [
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(post $post)
    {
        return view('dashboard.post.edit', [
            'categories' => Category::all(),
            'post' => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, post $post)
    {
        $rules = ([
            'title' => 'required|max:255',
            'category_id' => 'required',
            'image' => 'file|max:1024',
            'body' => 'required'
        ]);

        if ($request->file('image')) {
            # code...
            $validateData['image'] = $request->file('image')->store('post-image');
        }
        if ($request->slug != $post->slug) {
            $rules['slug'] = 'required|unique:posts';
        }
        $validateData = $request->validate($rules);
        if ($request->file('image')) {
            if ($request->oldimage) {
                Storage::delete($request->oldimage);
            }
            $validateData['image'] = $request->file('image')->store('post-image');
        }
        $validateData['user_id'] = auth()->user()->id;
        $validateData['excerpt'] = Str::limit(strip_tags($request->body), 200);
        post::where('id', $post->id)->update($validateData);
        return redirect('/dashboard/post')->with('success', 'Your Post Succesfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(post $post)
    {
        if ($post->image) {
            Storage::delete($post->image);
        }
        post::destroy($post->id);
        return redirect('/dashboard/post')->with('success', 'Your Post Succesfully Deleted');
    }
    public function checkSlug(Request $request)
    {

        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
