@extends('admin.layout')

@section('title', 'Dashboard')

@section('content')
{{--    <div class="" style="text-align: end">--}}
{{--        <a href="{{ url('/logout') }}">Logout</a>--}}
{{--    </div>--}}


    <h1>Welcome! {{ auth()->user()->first_name }}</h1>
@endsection
