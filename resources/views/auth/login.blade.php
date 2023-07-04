@extends('auth.layout')
@section('title', 'Login');
@section('content')
    <div class="container">
        <div class="row min-vh-100 d-flex justify-content-center align-items-center">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center">Welcome</h4>
                    </div>
                    <div class="card-body p-5">
                        @if(Session::has('error'))
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Error: </strong> {{ Session::get('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                        <form action="/login" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">
                                    Email
                                </label>
                                <input class="form-control"
                                       type="text"
                                       name="email"
                                       id="email"
                                >
                                @error('email')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">
                                    Password
                                </label>
                                <input class="form-control"
                                       type="password"
                                       name="password"
                                       id="password"
                                >
                                @error('password')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mt-4">
                                <button type="submit" class="w-100 btn btn-primary">LogIn</button>
                            </div>
                            <div class="mt-3">
                                <small class="f-1">Don't have account ? <br> <a href="/register"> Register here </a>Or go to <a
                                        href="/">Home Page</a>.</small>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
