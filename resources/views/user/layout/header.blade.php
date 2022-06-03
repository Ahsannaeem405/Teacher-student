<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">  
        {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script> --}}
         <link rel="stylesheet" href="{{ asset('css/style.css') }}">
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
                                <li><a class="" href="#">About Us</a></li>
                                <li><a class="" href="#">Features</a></li>
                                <li><a class="" href="{{url('price')}}">Pricing</a></li>
                                <li><a class="" href="#">Blog</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="col-md-3 mt-3 man-img-col">
                  <button class="btn loginbtn">Login</button>
                  <button class="btn registerbtn">Sign Up</button>
                </div>
            </div>
        </header>  
    
    