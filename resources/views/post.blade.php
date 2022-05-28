@extends('layouts.main')

@section('container')

    <h1 class="md-5">{{ $post->title }}</h1>

    <p>By. <a href="#" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
    
    {!! $post->body !!}
<a href="/blog" class="d-block mt-5">Back To Post</a>
@endsection
