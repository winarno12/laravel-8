@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My Post</h1>
    </div>
    <div class="col-8">
        @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @else
        @endif
        <a href="/dashboard/post/create" class="btn btn-primary btn-sm mb-3">Create New Post</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Title</th>
                    <th scope="col">Category</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->category->name }}</td>
                        <td>
                            <form action="/dashboard/post/{{ $post->slug }}" class="d-inline" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="badge bg-danger border-0"
                                    onclick="return confirm('Are you sure you want to delete this item?');"><i
                                        class="
                                    bi bi-x-lg""></i></button>
                                                </form>
                                                <a href=" /dashboard/post/{{ $post->slug }}" class="badge bg-info"><i
                                            class="bi bi-eye-fill"></i></a>
                                        <a href="/dasboard/posts/{{ $post->id }}" class="badge bg-warning"><i
                                                class="bi bi-pencil-square"></i></a>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
