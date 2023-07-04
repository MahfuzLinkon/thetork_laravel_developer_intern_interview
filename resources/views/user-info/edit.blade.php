@extends('front.layout')
@section('title', 'Edit User Information')
@section('content')
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="float-start">Edit User Information</h4>
                        <a href="/user-info" class="btn btn-primary float-end">All Information</a>
                    </div>
                    <div class="card-body p-5">
                        @if(Session::has('success'))
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>Success: </strong> {{ Session::get('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        <form action="{{ route('user-info.update', $userInfo->id) }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">
                                    Name
                                </label>
                                <input class="form-control"
                                       type="text"
                                       name="name"
                                       id="name"
                                       value="{{ $userInfo->name }}"
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
                                       type="email"
                                       name="email"
                                       id="email"
                                       value="{{ $userInfo->email }}"
                                >
                                @error('email')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="other_info" class="form-label">
                                    Other Information
                                </label>
                                <textarea name="other_info" id="other_info" class="form-control" cols="30" rows="10">{{ $userInfo->other_info }}</textarea>
                                @error('other_info')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mt-4">
                                <button type="submit" class="float-end btn btn-success">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
