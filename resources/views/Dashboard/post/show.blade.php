@extends('dashboard.layouts.main')
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h1 class="my-3">{{ $post->title }}</h1>
                <a href="/dashboard/post" class="btn btn-success btn-sm mb-2"><i class="bi bi-arrow-left"></i>Back To
                    MyPost</a>
                <a href="" class="btn btn-warning btn-sm mb-2"><i class="bi bi-arrow-left"></i>Update</a>
                <form action="/dashboard/post/{{ $post->slug }}" class="d-inline" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger btn-sm mb-2"
                        onclick="return confirm('Are you sure you want to delete this item?');"><i
                            class="
                        bi bi-x-lg""></i>Delete</button>
                                                    </form>
                                <img src=" https://source.unsplash.com/1200x400?{{ $post->category->name }}"
                            class="img-fluid" alt="{{ $post->category->name }}">
                            <article class="my-3 fs-5">
                                {!! $post->body !!}
                            </article>
            </div>
        </div>
    </div>
@endsection
