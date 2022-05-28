@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <h1 class="md-5">{{ $post->title }}</h1>
                <p>By. <a href="#" class="text-decoration-none">{{ $post->author->name }}</a> in <a
                        href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid"
                    alt="{{ $post->category->name }}">
                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>
                <a href="/blog" class="d-block mt-5">Back To Post</a>
            </div>
        </div>
    </div>
@endsection
