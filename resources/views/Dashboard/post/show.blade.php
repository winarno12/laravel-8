@extends('dashboard.layouts.main')
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h1 class="my-3">{{ $post->title }}</h1>
                <a href="/dashboard/post" class="btn btn-success btn-sm mb-2"><i class="bi bi-arrow-left"></i>Back To MyPost</a>
                <a href="" class="btn btn-warning btn-sm mb-2"><i class="bi bi-pencil-square"></i></a>
                <a href="" class="btn btn-danger btn-sm mb-2"><i class="bi bi-x-lg"></i>Delete</a>
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
