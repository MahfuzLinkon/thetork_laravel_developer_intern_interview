@extends('auth.layout')
@section('title', 'Register');
@section('content')
    <div class="container">
        <div class="row min-vh-100 d-flex justify-content-center align-items-center">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center">Register</h4>
                    </div>
                    <div class="card-body p-5">
{{--                        @if(Session::has('error'))--}}
{{--                            <div class="alert alert-warning alert-dismissible fade show" role="alert">--}}
{{--                                <strong>Error: </strong> {{ Session::get('error') }}--}}
{{--                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>--}}
{{--                            </div>--}}
{{--                        @endif--}}
                        <form action="/register" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">
                                    Name
                                </label>
                                <input class="form-control"
                                       type="text"
                                       name="name"
                                       id="name"
                                       value="{{ old('name') }}"
                                >
                                @error('name')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">
                                    Email
                                </label>
                                <input class="form-control"
                                       type="text"
                                       name="email"
                                       id="email"
                                       value="{{ old('email') }}"
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
                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">
                                    Confirm Password
                                </label>
                                <input class="form-control"
                                       type="password"
                                       name="password_confirmation"
                                       id="password_confirmation"
                                >
                                @error('password_confirmation')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mt-4">
                                <button type="submit" class="w-100 btn btn-primary">Register</button>
                            </div>
                            <div class="mt-3">
                                <span>Already have account ? <a href="/login"> Login here</a> </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
