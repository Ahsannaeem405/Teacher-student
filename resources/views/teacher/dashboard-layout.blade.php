<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title') | {{env('APP_NAME')}}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
{{--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>--}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
{{--    <link rel="stylesheet" href="{{ asset('css/style4.css') }}">--}}
    <link rel="stylesheet" href="{{ asset('css/student-style.css') }}">

    <style>
        body{
            font-family: Circular-Loom;
        }
    </style>
</head>

<body style="width: 100%">
    @include('teacher.layouts.nav')

    @php
        $plans = 'teacher.price-menu';
        $payment_type = 'teacher.payment-type';
        $payment_sub = 'teacher.payment-submission';
        $course_detail = 'teacher.course-detail';
        $profile = 'teacher.myProfile';
        $create_own = 'teacher.create-course';
        $dashboard = 'teacher.dashboard';
        $upload_profile = 'teacher.upload-profile';
        $status = 'teacher.status';
        $change_password = 'teacher.change-password';
    @endphp

    @if(request()->route()->getName() == $plans || request()->route()->getName() == $payment_type || request()->route()->getName() == $payment_sub)
        <div class="banner-one" style="width: 100%;"></div>
    @elseif(request()->route()->getName() == $course_detail || request()->route()->getName() == $profile)
        <div class="banner-three" style="width: 100%;"></div>
    @elseif(request()->route()->getName() == $create_own || request()->route()->getName() == $dashboard)
        <div class="banner-four" style="width: 100%;"></div>
    @elseif(request()->route()->getName() == $upload_profile || request()->route()->getName() == $status || request()->route()->getName() == $change_password)
        <div class="banner-five" style="width: 100%;"></div>
    @else
        <div class="banner-two" style="width: 100%;"></div>
    @endif

    <div class="tab-sec">
        <div class="row" style="padding-top: 0px; padding-left: 20px; margin-right: 0px;">
            <div class="col-md-4 tab-col vh-100">

                @include('teacher.layouts.sidebar')

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
