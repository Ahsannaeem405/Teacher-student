<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
         <link rel="stylesheet" href="{{ asset('css/style.css') }}">


        <style>
            body{
                font-family: Circular-Loom;
            }
        </style>
    </head>
    <body>
        <header class="main-header active-header">
            <div class="row">
                <div class="col-md-3 logo-col">
                    <img src="{{url('/images/logo.svg')}}" alt="Image"/>
                </div>
                <div class="col-md-6 menu-col">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-lable="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="nav navbar-nav">
                                <li><a class="" href="#">About Us</a></li>
                                <li><a class="" href="#">Features</a></li>
                                <li><a class="" href="#">Pricing</a></li>
                                <li><a class="" href="#">Blog</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="col-md-3 man-img-col">
                    <img src="{{url('/images/607160c7d3be9.png')}}" alt="Image"/>
                </div>
            </div>
        </header>
    </body>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins)   Order is important -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        <script src="{{asset('js/custom.js')}}"></script>
</html
