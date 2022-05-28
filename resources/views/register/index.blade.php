@extends('layouts.main')
@section('container')
    <div class="row justify-content-center">
        <div class="col-5">
            <main class="form-registration">
                <h1 class="h3 mb-3 fw-normal text-center">sign up</h1>
                <form>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="name" name="name" placeholder="name">
                        <label for="name">Name</label>
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="username" name="username" placeholder="name">
                        <label for="username">Name</label>
                    </div>
                    <div class="form-floating">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="password" placeholder="Password">
                        <label for="password">Password</label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Sign in</button>
                </form>
                <small class="d-block text-center mt-3">Not Regiter <a href="/register">Register Now</a></small>
            </main>
        </div>
    </div>
@endsection
