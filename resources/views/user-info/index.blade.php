@extends('front.layout')
@section('title', 'User Information')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="float-start">User Information</h4>
                    <a href="{{ route('user-info.create') }}" class="btn btn-primary float-end">Create New</a>
                </div>
                <div class="card-body">
                    @if(Session::has('success'))
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Success: </strong> {{ Session::get('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <table class="table">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Other Info</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($user_infos as $user_info)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $user_info->name }}</td>
                                <td>{{ $user_info->email }}</td>
                                <td>{{ $user_info->other_info }}</td>
                                <td>
                                    <a href="{{ route('user-info.show', ['id' => $user_info->id]) }}" class="text-light btn btn-info">Details</a>
                                    <a href="{{ route('user-info.edit', ['id' => $user_info->id]) }}" class="btn btn-primary">Edit</a>
                                    <a href="{{ route('user-info.destroy', ['id' => $user_info->id]) }}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
