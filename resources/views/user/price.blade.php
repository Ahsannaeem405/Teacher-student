@extends('user.layout')
@section('content')
<link rel="stylesheet" href="{{ asset('css/style2.css') }}">
<style>
    .border{
        border: 1px solid rgb(185, 196, 138);margin-top:1rem;
    }
    .priceBtn{
        background-color: #308214 ;
    color: #fff;
    font-size: 18px;
    padding: 10px 45px;
    border: none;
    border-radius: 11px;
    box-shadow: 0px 0px 35px rgb(231, 232, 231);
    }

</style>
<div class="banner-two">


    <div class="banner_text text-center centered">
        <h1 class="text-heading" style="font-weight: bold;font-family: sans-serif;">PRICING</h1>
        <h3 class="textbold" style="color:#a5a3a3;font-family:sans-serif !important;
        width: 88%;
        margin: auto;
        ">Choose the right payment option that best suits
            you.</h3>

    </div>


</div>
<div style="background-color: white; margin-top: -19rem; border-radius: 1%"><div >


    <br>    <br>    <br>
    <div class="container pricing">

        <div class="row row_width padding_4_col2 padding_4_col">
            <div class="col-lg-3  col-md-6 col-sm-12">
                <div class="card border" >
                    <div class="card-body ">
                        <h4>Free</h4>
                        <div class="price">
                            <h2 class=""><i>Free</i></h2>
                        </div>
                        <p class="card-text">Features include:</p>

                        <ul>
                            <li class="list-unstyled plan_list"> <img src="{{ asset('images/tick.png') }}" width="19" height="18" alt="" srcset=""> <span class="l_p"></span> <span class="li_font">   Upload <strong>one</strong>  video for free</span></li>
                            <li class="list-unstyled plan_list"> <img src="{{ asset('images/tick.png') }}" width="24" height="18" alt="" srcset=""> <span class="l_p"></span> <span class="li_font">  Upload your videos any time at your leisure </span></li>
                            <li class="list-unstyled plan_list"> <img src="{{ asset('images/tick.png') }}" width="24" height="18" alt="" srcset=""> <span class="l_p"></span> <span class="li_font">    Share your videos with your social media</span></li>
                                <li class="list-unstyled plan_list"> <img src="{{ asset('images/tick.png') }}" width="24" height="18" alt="" srcset=""> <span class="l_p"></span> <span class="li_font">    Share your videos with your social media</span></li>
                        </ul>
                        <a href="{{ url('/login') }}" class="pricing_anchor">Select Plan</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3  col-md-6 col-sm-12">
                <div class="card border middle-card2">
                    <div class="card-body">
                        <h4>Basic</h4>
                        <div class="price">
                            <h2 class="">$50&nbsp;<span>month</span></h2>
                        </div>
                        <p class="card-text">Features include:</p>
                        <ul>
                            <li class="list-unstyled plan_list"> <img src="{{ asset('images/tick.png') }}" width="24" height="18" alt="" srcset=""> <span class="l_p"></span> <span class="li_font">Upload your video any time at your liesure</span></li>
                            <li class="list-unstyled plan_list"> <img src="{{ asset('images/tick.png') }}" width="24" height="18" alt="" srcset=""> <span class="l_p"></span> <span class="li_font"> Upload <strong>15</strong> videos per month for<strong>&nbsp;$50</strong> a month </span></li>
                            <li class="list-unstyled plan_list"> <img src="{{ asset('images/tick.png') }}" width="24" height="18" alt="" srcset=""> <span class="l_p"></span> <span class="li_font"> Upload <strong>15</strong> videos per month for<strong>&nbsp;$50</strong> a month</span></li>
                                <li class="list-unstyled plan_list"> <img src="{{ asset('images/tick.png') }}" width="24" height="18" alt="" srcset=""> <span class="l_p"></span> <span class="li_font"> Watch videos anytime at your leisure</span></li>
                                <li class="list-unstyled plan_list"> <img src="{{ asset('images/tick.png') }}" width="24" height="18" alt="" srcset=""> <span class="l_p"></span> <span class="li_font"> Share your videos with your social media</span></li>
                        </ul>
                        <a class="btn priceBtn" href="{{ url('/login') }}">Select Plan</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3  col-md-6 col-sm-12">
                <div class="card border">
                    <div class="card-body">
                        <h4>Intermediate</h4>
                        <div class="price">
                            <h2 class="">$150&nbsp;<span>month</span> </h2>
                        </div>
                        <p class="card-text">Features include:</p>
                        <ul>
                            <li class="list-unstyled plan_list"> <img src="{{ asset('images/tick.png') }}" width="24" height="18" alt="" srcset=""> <span class="l_p"></span> <span class="li_font">  Upload your video any time at your liesure</span></li>
                            <li class="list-unstyled plan_list"> <img src="{{ asset('images/tick.png') }}" width="24" height="18" alt="" srcset=""> <span class="l_p"></span> <span class="li_font">Upload <strong>40</strong> videos per month for<strong>&nbsp;$150</strong> a month</span></li>
                            <li class="list-unstyled plan_list"> <img src="{{ asset('images/tick.png') }}" width="24" height="18" alt="" srcset=""> <span class="l_p"></span> <span class="li_font">  Watch videos anytime at your leisure</span></li>
                            <li class="list-unstyled plan_list"> <img src="{{ asset('images/tick.png') }}" width="24" height="18" alt="" srcset=""> <span class="l_p"></span> <span class="li_font"> Share your videos with your social media</span></li>
                        </ul>
                        <a class="btn priceBtn" href="{{ url('/login') }}">Select Plan</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3  col-md-6 col-sm-12">
                <div class="card border">
                    <div class="card-body">
                        <h4>Enterprise</h4>
                        <div class="price">
                            <h2 class="">$300&nbsp;<span>month</span></h2>
                        </div>
                        <p class="card-text">Features include:</p>
                        <ul>
                            <li class="list-unstyled plan_list"> <img src="{{ asset('images/tick.png') }}" width="24" height="18" alt="" srcset=""> <span class="l_p"></span> <span class="li_font"> Upload your video any time at your liesure</span></li>
                            <li class="list-unstyled plan_list"> <img src="{{ asset('images/tick.png') }}" width="24" height="18" alt="" srcset=""> <span class="l_p"></span> <span class="li_font">Upload <strong>unlimited videos</strong>  per month for<strong>&nbsp;$300</strong> a month</span></li>
                            <li class="list-unstyled plan_list"> <img src="{{ asset('images/tick.png') }}" width="24" height="18" alt="" srcset=""> <span class="l_p"></span> <span class="li_font"> Watch videos anytime at your leisure</span></li>
                            <li class="list-unstyled plan_list"> <img src="{{ asset('images/tick.png') }}" width="24" height="18" alt="" srcset=""> <span class="l_p"></span> <span class="li_font"> Share your videos with your social media</span></li>
                        </ul>
                        <a class="btn priceBtn" href="{{ url('/login') }}">Select Plan</a>

                    </div>
                </div>
            </div>
        </div>
    </div>

          <br>
          <br>
    <!-- last blue section start -->

</div>
</div>
<br>
<div class="container pricing"></div>
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

