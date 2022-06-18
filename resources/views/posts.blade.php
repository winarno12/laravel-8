@extends('layouts.main')

@section('container')
    @if ($posts->count())
        <h1 class="mb-5">{{ $title }}</h1>
        <div class="card mb-3">
            @if ($posts[0]->image)
                <div style="max-height: 350px ;overflow: hidden;">
                    <img src="{{ asset('/storage/' . $posts[0]->image) }}" class="img-fluid"
                        alt="{{ $posts[0]->category->name }}">
                </div>
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top"
                    alt="{{ $posts[0]->category->name }}">
            @endif
            <div class="card-body text-center">
                <h3 class="card-title text-dark"><a href="/posts/{{ $posts[0]->slug }}"
                        class="text-decoration-none">{{ $posts[0]->title }}</a> </h5>
                    <p>
                        <small class="text-muted">
                            By. <a href="/authors/{{ $posts[0]->author->username }}"
                                class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a
                                href="/categories/{{ $posts[0]->category->slug }}"
                                class="text-decoration-none">{{ $posts[0]->category->name }}</a>
                            {{ $posts[0]->created_at->diffForHumans() }}
                        </small>
                    </p>
                    <p class="card-text">{{ $posts[0]->excerpt }}</p>
                    <a href="/posts/{{ $posts[0]->slug }}" class="btn btn-primary">Read More</a>
            </div>
        </div>
    @else
        <p class="text-center fs-4">No Post found</p>
    @endif
    <div class="container">
        <div class="row">
            @foreach ($posts->skip(1) as $post)
                <div class="col-4 mb-3">
                    <div class="card">
                        <a href="/categories/{{ $post->category->slug }}" class="text-white text-decoration-none">
                            <div class="position-absolute  px-3 py-2" style="background-color: rgba(0,0 ,0, 0.7 )">
                                {{ $post->category->name }}
                            </div>
                        </a>
                        @if ($post->image)
                            <img src="{{ asset('/storage/' . $post->image) }}" class="img-fluid"
                                alt="{{ $post->category->name }}">
                        @else
                            <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}"
                                class="card-img-top" alt="...">
                        @endif

                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p>
                                <small class="text-muted">
                                    By. <a href="/authors/{{ $post->author->username }}"
                                        class="text-decoration-none">{{ $post->author->name }}</a>
                                    {{ $post->created_at->diffForHumans() }}
                                </small>
                            </p>
                            <p class="card-text">S{{ $post->excerpt }}</p>
                            <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Go Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    </div>
@endsection
