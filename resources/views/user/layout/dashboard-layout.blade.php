<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title') | {{env('APP_NAME')}}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
{{--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>--}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <style>
        body{
            font-family: Circular-Loom;
        }
    </style>
</head>

<body>
    @include('user.layout.nav')

    <div class="banner-two"></div>

    <div class="tab-sec">
        <div class="row" style="padding-top: 65px; padding-left: 20px;">
            <div class="col-md-4 tab-col">

                @include('user.layout.sidebar')

            </div>
            <div class="col-md-8 tab-content-col">

                @yield('content')

            </div>

{{--            <div class="clearfix"></div>--}}
        </div>
    </div>

    <!-- last blue section start -->
    <div class="next-project">
        <div class="two-img">
            <img src="{{url('/images/dot-shape-primary.svg')}}" alt="Image"/>
            <img src="{{url('/images/dot-shape-white.svg')}}" alt="Image"/>
        </div>
        <div class="container">
            <h1>Have A Vision For Your</h1>
            <h1>Next Project? Let's Get Your</h1>
            <h1>14 Day Trial Started Now!</h1>
            <div class="btn-sec mt-5">
                <button>Learn More <img src="{{url('/images/arrow.png')}}" alt="Image"/></button>
                <button>Join With Us!</button>
            </div>
        </div>
        <div class="one-img">
            <img src="{{url('/images/dot-shape-white.svg')}}" alt="Image"/>
        </div>
    </div>

@yield('JS')
{{--@include('footer')--}}
