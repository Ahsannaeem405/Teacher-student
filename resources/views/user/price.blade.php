@extends('user.layout')
@section('content')
<style>
    .border{
        border: 2px solid grey;
    }
    .priceBtn{
        background-color: #308214;
    color: #fff;
    font-size: 18px;
    padding: 10px 45px;
    border: none;
    border-radius: 11px;
    box-shadow: 0px 0px 35px rgb(0 0 0 / 20%);
    }
</style>
<div class="banner-two"></div>
<div class="text-center">
    <div class="row ">
        <div class=" col-md-12">
            <h2 class=" text-center">Plans</h2>
        </div>
    </div>
    <div class="row">
        <h3 class="mt-5" style="color:#000;">Choose the right payment option that best suits you</h3>
    </div>
</div>
<br>
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
                        <li class="list-unstyled"><i class="fa fa-check-circle-o" aria-hidden="true"></i> <span></span> Upload <strong>one</strong>  video for free</li>
                        <li class="list-unstyled"><i class="fa fa-check-circle-o" aria-hidden="true"></i> <span></span> Upload your videos any time at your leisure</li>
                        <li class="list-unstyled"><i class="fa fa-check-circle-o" aria-hidden="true"></i> <span></span> Share your videos with your social media</li>
                        <li class="list-unstyled"><i class="fa fa-check-circle-o" aria-hidden="true"></i> <span></span> Share your videos with your social media</li>
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
                        <li  class="list-unstyled"><i class="fa fa-check-circle-o" aria-hidden="true"></i> <span></span> Upload your video any time at your liesure</li>
                        <li  class="list-unstyled"><i class="fa fa-check-circle-o" aria-hidden="true"></i> <span></span> Upload <strong>15</strong> videos per month for<strong>$50</strong> a month</li>
                        <li  class="list-unstyled"><i class="fa fa-check-circle-o" aria-hidden="true"></i> <span></span class="list-unstyled"> Upload <strong>15</strong> videos per month for<strong>$50</strong> a month</li>
                        <li class="list-unstyled"><i class="fa fa-check-circle-o" aria-hidden="true"></i> <span></span> Watch videos anytime at your leisure</li>
                        <li class="list-unstyled"><i class="fa fa-check-circle-o" aria-hidden="true"></i> <span></span> Share your videos with your social media</li>
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
                        <li class="list-unstyled"><i class="fa fa-check-circle-o" aria-hidden="true"></i> <span></span>  Upload your video any time at your liesure</li>
                        <li class="list-unstyled"><i class="fa fa-check-circle-o" aria-hidden="true"></i> <span></span>Upload <strong>40</strong> videos per month for<strong>$150</strong> a month</li>
                        <li class="list-unstyled"><i class="fa fa-check-circle-o" aria-hidden="true"></i> <span></span>  Watch videos anytime at your leisure</li>
                        <li class="list-unstyled"><i class="fa fa-check-circle-o" aria-hidden="true"></i> <span></span> Share your videos with your social media</li>
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
                        <li class="list-unstyled"><i class="fa fa-check-circle-o" aria-hidden="true"></i> <span></span> Upload your video any time at your liesure</li>
                        <li class="list-unstyled"><i class="fa fa-check-circle-o" aria-hidden="true"></i> <span></span> Upload <strong>unlimited videos</strong>  per month for<strong>$300</strong> a month</li>
                        <li class="list-unstyled"><i class="fa fa-check-circle-o" aria-hidden="true"></i> <span></span> Watch videos anytime at your leisure</li>
                        <li class="list-unstyled"><i class="fa fa-check-circle-o" aria-hidden="true"></i> <span></span> Share your videos with your social media</li>
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
