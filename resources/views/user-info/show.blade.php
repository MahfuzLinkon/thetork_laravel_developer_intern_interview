@extends('front.layout')
@section('title', 'User Information')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="float-start">User Details</h4>
                    <a href="{{ url()->previous() }}" class="btn btn-primary float-end">Back Page</a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-8 m-auto">
                            <div class="row">
                                <div class="col-lg-3 fw-bold">
                                    <p>Name:</p>
                                    <p>Email:</p>
                                    <p>Other Info:</p>
                                </div>
                                <div class="col-lg-9">
                                    <p>{{ $userInfo->name }}</p>
                                    <p>{{ $userInfo->email }}</p>
                                    <p>{{ $userInfo->other_info }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
