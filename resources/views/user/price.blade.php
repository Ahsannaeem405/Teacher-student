@extends('user.layout')
@section('content')
<link rel="stylesheet" href="{{ asset('css/style2.css') }}">
<style>
    .border{
        border: 1px solid rgb(185, 196, 138);



    }
    .priceBtn{
        background-color: #308214;
    color: #fff;
    font-size: 18px;
    padding: 10px 45px;
    border: none;
    border-radius: 11px;
    box-shadow: 0px 0px 35px rgb(231, 232, 231);
    }

</style>
<div class="banner-two"></div>
<div class="container" >


    <br>    <br>    <br>
    <div class="container pricing">

        <div class="row">
            <div class="col-lg-3  col-md-6 col-sm-12">
                <div class="card border" >
                    <div class="card-body ">
                        <h4>Free</h4>
                        <div class="price">
                            <h2 class=""><i>Free</i></h2>
                        </div>
                        <p class="card-text">Features include:</p>

                        <ul>
                            <li class="list-unstyled plan_list"> <img src="{{ asset('images/tick.png') }}" width="24" height="24" alt="" srcset=""> <span class="l_p"></span> <span class="li_font">   Upload <strong>one</strong>  video for free</span></li>
                            <li class="list-unstyled plan_list"> <img src="{{ asset('images/tick.png') }}" width="24" height="24" alt="" srcset=""> <span class="l_p"></span> <span class="li_font">  Upload your videos any time at your leisure </span></li>
                            <li class="list-unstyled plan_list"> <img src="{{ asset('images/tick.png') }}" width="24" height="24" alt="" srcset=""> <span class="l_p"></span> <span class="li_font">    Share your videos with your social media</span></li>
                                <li class="list-unstyled plan_list"> <img src="{{ asset('images/tick.png') }}" width="24" height="24" alt="" srcset=""> <span class="l_p"></span> <span class="li_font">    Share your videos with your social media</span></li>
                        </ul>
                        <button>Select Plan</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3  col-md-6 col-sm-12">
                <div class="card middle-card">
                    <div class="card-body">
                        <h4>Basic</h4>
                        <div class="price">
                            <h2 class="">$50 <br><span>month</span> </h2>
                        </div>
                        <p class="card-text">Features include:</p>
                        <ul>
                            <li class="list-unstyled plan_list"> <img src="{{ asset('images/tick.png') }}" width="24" height="24" alt="" srcset=""> <span class="l_p"></span> <span class="li_font">Upload your video any time at your liesure</span></li>
                            <li class="list-unstyled plan_list"> <img src="{{ asset('images/tick.png') }}" width="24" height="24" alt="" srcset=""> <span class="l_p"></span> <span class="li_font"> Upload <strong>15</strong> videos per month for<strong>$50</strong> a month </span></li>
                            <li class="list-unstyled plan_list"> <img src="{{ asset('images/tick.png') }}" width="24" height="24" alt="" srcset=""> <span class="l_p"></span> <span class="li_font"> Upload <strong>15</strong> videos per month for<strong>$50</strong> a month</span></li>
                                <li class="list-unstyled plan_list"> <img src="{{ asset('images/tick.png') }}" width="24" height="24" alt="" srcset=""> <span class="l_p"></span> <span class="li_font"> Watch videos anytime at your leisure</span></li>
                                <li class="list-unstyled plan_list"> <img src="{{ asset('images/tick.png') }}" width="24" height="24" alt="" srcset=""> <span class="l_p"></span> <span class="li_font"> Share your videos with your social media</span></li>
                        </ul>
                        <a class="btn priceBtn" href="{{url('subscribe_plan')}}?price=50">Select Plan</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3  col-md-6 col-sm-12">
                <div class="card border">
                    <div class="card-body">
                        <h4>Intermediate</h4>
                        <div class="price">
                            <h2 class="">$150<br><span>month</span> </h2>
                        </div>
                        <p class="card-text">Features include:</p>
                        <ul>
                            <li class="list-unstyled plan_list"> <img src="{{ asset('images/tick.png') }}" width="24" height="24" alt="" srcset=""> <span class="l_p"></span> <span class="li_font">  Upload your video any time at your liesure</span></li>
                            <li class="list-unstyled plan_list"> <img src="{{ asset('images/tick.png') }}" width="24" height="24" alt="" srcset=""> <span class="l_p"></span> <span class="li_font">Upload <strong>40</strong> videos per month for<strong>$150</strong> a month</span></li>
                            <li class="list-unstyled plan_list"> <img src="{{ asset('images/tick.png') }}" width="24" height="24" alt="" srcset=""> <span class="l_p"></span> <span class="li_font">  Watch videos anytime at your leisure</span></li>
                            <li class="list-unstyled plan_list"> <img src="{{ asset('images/tick.png') }}" width="24" height="24" alt="" srcset=""> <span class="l_p"></span> <span class="li_font"> Share your videos with your social media</span></li>
                        </ul>
                        <a class="btn priceBtn" href="{{url('subscribe_plan')}}?price=150">Select Plan</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3  col-md-6 col-sm-12">
                <div class="card border">
                    <div class="card-body">
                        <h4>Enterprise</h4>
                        <div class="price">
                            <h2 class="">$300 <br><span>month</span></h2>
                        </div>
                        <p class="card-text">Features include:</p>
                        <ul>
                            <li class="list-unstyled plan_list"> <img src="{{ asset('images/tick.png') }}" width="24" height="24" alt="" srcset=""> <span class="l_p"></span> <span class="li_font"> Upload your video any time at your liesure</span></li>
                            <li class="list-unstyled plan_list"> <img src="{{ asset('images/tick.png') }}" width="24" height="24" alt="" srcset=""> <span class="l_p"></span> <span class="li_font">Upload <strong>unlimited videos</strong>  per month for<strong>$300</strong> a month</span></li>
                            <li class="list-unstyled plan_list"> <img src="{{ asset('images/tick.png') }}" width="24" height="24" alt="" srcset=""> <span class="l_p"></span> <span class="li_font"> Watch videos anytime at your leisure</span></li>
                            <li class="list-unstyled plan_list"> <img src="{{ asset('images/tick.png') }}" width="24" height="24" alt="" srcset=""> <span class="l_p"></span> <span class="li_font"> Share your videos with your social media</span></li>
                        </ul>
                        <a class="btn priceBtn" href="{{url('subscribe_plan')}}?price=300">Select Plan</a>

                    </div>
                </div>
            </div>
        </div>
    </div>

          <br>
          <br>
    <!-- last blue section start -->

</div>
{{--  <<<<<<< HEAD
@endsection
=======  --}}
<br>
<div class="container pricing">


</div>

      <br>
      <br>
<!-- last blue section start -->
        <div class="next-project ">
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
@endsection
{{--  >>>>>>> b98813ee12ab0e7bd0f555e2ad39bcfc429a6403  --}}
