@extends('layouts.main')
@section('container')
    <div class="row justify-content-center">
        <div class="col-5">
            <main class="form-signin">
                <h1 class="h3 mb-3 fw-normal text-center">Please sign in</h1>
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if (session()->has('login erorr'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('login erorr') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <form method="POST" action="/login">
                    @csrf
                    <div class="form-floating">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                            id="floatingInput" autofocus placeholder="name@example.com" value="{{ old('email') }}">
                        <label for="floatingInput">Email address</label>
                        @error('email')
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control  @error('password') is-invalid @enderror"
                            id="floatingPassword" name="password" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                        @error('password')
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
                </form>
                <small class="d-block text-center mt-3">Not Regiter <a href="/register">Register Now</a></small>
            </main>
        </div>
    </div>
@endsection
