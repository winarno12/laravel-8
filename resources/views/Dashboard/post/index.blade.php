@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My Post</h1>
    </div>
    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @else
    @endif
    <div class="col-8">
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
                            <a href="/dashboard/post/{{ $post->slug }}" class="badge bg-info"><i
                                    class="bi bi-eye-fill"></i></a>
                            <a href="/dasboard/posts/{{ $post->id }}" class="badge bg-warning"><i
                                    class="bi bi-pencil-square"></i></a>
                            <a href="/dasboard/posts/{{ $post->id }}" class="badge bg-danger"><i
                                    class="bi bi-x-lg"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
