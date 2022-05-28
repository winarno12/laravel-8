@extends('layouts.main')
@section('container')
    <div class="row justify-content-center">
        <div class="col-5">
            <main class="form-registration">
                <h1 class="h3 mb-3 fw-normal text-center">sign up</h1>
                <form action="/register" method="POST">
                    @csrf
                    @error('name')
                        <h3>okee</h3>
                    @enderror
                    <div class="form-floating">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                            placeholder="name" value="{{ old('name') }}">
                        <label for="name">Name</label>
                        @error('name')
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control @error('username') is-invalid @enderror" id="username"
                            name="username" placeholder="username" value="{{ old('username') }}">
                        <label for="username">username</label>
                        @error('username')
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control  @error('email') is-invalid @enderror" id="floatingInput"
                            placeholder="name@example.com" name="email" value="{{ old('email') }}">
                        <label for="floatingInput">Email address</label>
                        @error('email')
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control  @error('password') is-invalid @enderror" id="password"
                            name="password" placeholder="Password">
                        <label for="password">Password</label>
                        @error('password')
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Sign in</button>
                </form>
                <small class="d-block text-center mt-3">Not Regiter <a href="/register">Register Now</a></small>
            </main>
        </div>
    </div>
@endsection
