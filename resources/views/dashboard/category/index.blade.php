@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">POST CATEGORY</h1>
    </div>
    {{-- @php
        
        @dd($category)
    @endphp --}}
    <div class="col-6">
        @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @else
        @endif
        <a href="/dashboard/category/create" class="btn btn-primary btn-sm mb-3">Create New Category</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($category as $v)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $v->name }}</td>
                        <td>
                            <form action="/dashboard/category/{{ $v->slug }}" class="d-inline" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="badge bg-danger border-0"
                                    onclick="return confirm('Are you sure you want to delete this item?');"><i
                                        class="
                                    bi bi-x-lg""></i></button>
                            </form>
                            <a href=" /dashboard/category/{{ $v->slug }}" class="badge bg-info"><i
                                    class="bi bi-eye-fill"></i></a>
                            <a href="/dashboard/post/{{ $v->slug }}/edit" class="badge bg-warning"><i
                                    class="bi bi-pencil-square"></i></a>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
