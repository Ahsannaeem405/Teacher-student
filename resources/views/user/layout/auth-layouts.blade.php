<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ env('APP_NAME') }}</title>

    <!-- Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script> --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <style>
        body{
            font-family: Circular-Loom;
        }
        .loginbtn{
            background: #797C5B;
            color:white;
            border: 1px solid #707070;
            margin-top:10px;
        }
        .registerbtn{
            background: #C9C97E;
            color:white;
            border: 1px solid #707070;
            margin-top:10px;

        }
    </style>
</head>
<body>
<header class="main-header active-header">
    <div class="row pb-3">
        <div class="col-md-3 logo-col">
            <a href="{{url('/')}}">  <img src="{{url('/images/logo.svg')}}"  alt="Image"/></a>
        </div>
        <div class="col-md-6 menu-col">
            <nav class="navbar navbar-expand-lg navbar-light">
                {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-lable="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button> --}}
                <div class="" id="navbarNavDropdown">
                    <ul class="nav navbar-nav ">
                        <li><a class="text-decoration-none" href="{{ url('/about') }}">About Us</a></li>
                        <li><a class="text-decoration-none" href="#">Features</a></li>
                        <li><a class="text-decoration-none" href="{{url('price')}}">Pricing</a></li>
                        <li><a class="text-decoration-none" href="{{ url('/blog') }}">Blog</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="col-md-3 man-img-col">
            <a href="{{ url('/login') }}" class="btn loginbtn">Login</a>
            <a href="{{ url('register/here') }}" class="btn registerbtn">Sign Up</a>
        </div>
    </div>
</header>

@yield('content')


<div class="next-project ">
    <div class="two-img">
        <img src="{{url('/images/dot-shape-primary.svg')}}" alt="Image"/>
        <img src="{{url('/images/dot-shape-white.svg')}}" alt="Image"/>
    </div>

    <div class="container">
        <h1>Have A Vision For Your</h1>
        <h1>Next Project? Let's Get Your</h1>
        <h1>14 Day Trial Started Now!</h1>
        <div class="btn-sec">
            <button>Learn More <img src="{{url('/images/arrow.png')}}" alt="Image"/></button>
            <button>Join With Us!</button>
        </div>
    </div>

    <div class="">
        <img style="width: 50px; margin-left: -27px; margin-top: 10px;" src="{{url('/images/dot-shape-white.svg')}}" alt="Image"/>
    </div>
</div>

<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 footer-first">
                <img src="{{ asset('images/logo-main.svg') }}" alt="Image" style="width: 90px;"/>
                <p>Virtual teaching is a marketplace filled with qualified teachers that will provide excellent teaching resources. We are happy to work with you in your learning journey.</p>
                <h4 class="m_right">Follow Us:</h4>
                <ul class="footer-icon">
                    <li><i class="fa fa-linkedin"></i></li>
                    <li><i class="fa fa-facebook"></i></li>
                    <li><i class="fa fa-twitter"></i></li>
                    <li><i class="fa fa-instagram"></i></li>
                </ul>
            </div>
            <div class="col-md-2">
                <h4>Product</h4>
                <ul class="footer-link">
                    <li><i class="fa fa-angle-right"></i>&nbsp;  <a class="" href="#">About Us</a></li>
                    <li><i class="fa fa-angle-right"></i>&nbsp;  <a class="" href="#">Features</a></li>
                    <li><i class="fa fa-angle-right"></i>&nbsp;  <a class="" href="#">Pricing</a></li>
                    <li><i class="fa fa-angle-right"></i>&nbsp;  <a class="" href="#">Blog</a></li>
                </ul>
            </div>
            <div class="col-md-2">
                <h4>Company</h4>
                <ul class="footer-link">
                    <li><i class="fa fa-angle-right"></i>&nbsp;  <a class="" href="#">About Us</a></li>
                    <li><i class="fa fa-angle-right"></i>&nbsp;  <a class="" href="#">Blog</a></li>
                </ul>
            </div>
            <div class="col-md-4 forth-col">
                <h4>Help</h4>
                <ul class="footer-link">
                    <li><i class="fa fa-angle-right"></i>&nbsp;  <a class="" href="#">Contact Us</a></li>
                    <li><i class="fa fa-angle-right"></i>&nbsp;  <a class="" href="#">Terms Of Service</a></li>
                    <li><i class="fa fa-angle-right"></i>&nbsp;  <a class="" href="#">Privacy Policy</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="footer-float-right">
        <img src="{{ asset('images/dot-shape-primary.svg') }}" alt="Image"/>
    </div>

</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins)   Order is important -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script src="{{asset('js/custom.js')}}"></script>

</body>
</html>
