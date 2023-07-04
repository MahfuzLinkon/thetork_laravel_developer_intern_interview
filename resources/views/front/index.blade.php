@extends('front.layout')
@section('title', 'Home')
@section('content')
    @guest
    <h4 class="text-center">Home Page</h4>
    @endguest
    @auth
        <h5 class="">Welcome back <span class="text-primary">{{ auth()->user()->name }}</span></h5>
    @endauth
@endsection
