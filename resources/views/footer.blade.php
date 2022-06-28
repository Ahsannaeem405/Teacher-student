<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        <style>
            body{
                font-family: Circular-Loom;
            }
        </style>
    </head>
    <body>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 footer-first-col ">
                        <img src="{{url('/images/logo-main.svg')}}" alt="Image"/>
                        <p>Virtual teaching is a marketplace filled with qualified teachers that will provide excellent teaching resources. We are happy to work with you in your learning journey.</p>
                        <h4 class="m_right">Follow Us:</h4>
                        <ul class="footer-icon">
                            <li><i class="fa fa-linkedin"></i></li>
                            <li><i class="fa fa-facebook"></i></li>
                            <li><i class="fa fa-twitter"></i></li>
                            <li><i class="fa fa-instagram"></i></li>
                        </ul>
                    </div>
                    <div class="col-md-2 ">
                        <h4>Product</h4>
                        <ul class="footer-link">
                            <li><i class="fa fa-angle-right"></i>&nbsp;  <a class="" href="#">About Us</a></li>
                            <li><i class="fa fa-angle-right"></i>&nbsp;  <a class="" href="#">Features</a></li>
                            <li><i class="fa fa-angle-right"></i>&nbsp;  <a class="" href="#">Pricing</a></li>
                            <li><i class="fa fa-angle-right"></i>&nbsp;  <a class="" href="#">Blog</a></li>
                        </ul> 
                    </div>
                    <div class="col-md-2 ">
                        <h4>Company</h4>
                        <ul class="footer-link">
                            <li><i class="fa fa-angle-right"></i>&nbsp;  <a class="" href="#">About Us</a></li>
                            <li><i class="fa fa-angle-right"></i>&nbsp;  <a class="" href="#">Blog</a></li>
                        </ul> 
                    </div>
                    <div class="col-md-4 forth-col ">
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
                <img src="{{url('/images/dot-shape-primary.svg')}}" alt="Image"/>
            </div>
        </div>
    </body>
    </html>
        