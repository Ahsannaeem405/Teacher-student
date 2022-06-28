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


<link rel="stylesheet" href="{{ asset('css/style4.css') }}">


         <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

        <style>
            @font-face {
                font-family: KaushanScript-Regular;
                src: url('{{asset('fonts/KaushanScript-Regular.ttf')}}');
            }


            @font-face {
                font-family: Louis George Cafe Bold;
                src: url('{{asset('fonts/Louis George Cafe Bold.ttf')}}');

            }
                h3{
    font-family:KaushanScript-Regular !important;
}

            body{
                font-family: Circular-Loom;

            }
            .loginbtn{
                background: #47472f;
                color:white;
                border: 1px solid #47472f;
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


        <button type="button" onclick="check_alarm()" class="btn btn-primary res_nav" id="show_nav">
            <i class="fas fa-bars"></i>
          </button>


        <header class="main-header active-header active-header2">
            <div class="row">
                <div class="col-md-3 logo-col">
                  <a href="{{url('/')}}">  <img src="{{url('/images/logo.svg')}}"  alt="Image"/></a>
                </div>
                <div class="col-md-6 menu-col">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-lable="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button> --}}
                        <div class="" id="navbarNavDropdown">
                            <ul class="nav navbar-nav">
                                <li><a class="" href="{{ url('/about') }}">About Us</a></li>
                                <li><a class="" href="{{ url('/features') }}">Features</a></li>
                                <li><a class="" href="{{url('price')}}">Pricing</a></li>
                                <li><a class="" href="{{ url('/blog') }}">Blog</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="col-md-3 mt-3 man-img-col text-end-btn  ">
                  <a href="{{ url('/login') }}" class="btn loginbtn">Login</a>
                  <a href="{{ url('register/here') }}" class="btn registerbtn">Sign Up</a>
                </div>
            </div>
        </header>

        {{--  <div class="res_nav">
            <div>
                          <a href="{{url('/')}}">  <img style="width: 70px;" src="{{url('/images/logo.svg')}}"  alt="Image"/></a>
                        </div>
            <div class="" style="text-align: right">

            </div>
                        </div>  --}}

        <script>

            function check_alarm(){
                $(".main-header").toggle();
}




        </script>

