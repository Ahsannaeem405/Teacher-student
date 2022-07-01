@extends('teacher.layout.main')
@section('content')


<link rel="stylesheet" href="{{ asset('css/style2.css') }}">
<style>
    .border{
        border: 1px solid rgb(185, 196, 138);
    }
    .priceBtn{
        background-color: #308214 !important;
    color: #fff !important;
    font-size: 18px !important;
    padding: 10px 45px !important;
    border: none !important;
    border-radius: 11px !important;
    box-shadow: 0px 0px 35px rgb(231, 232, 231) !important;
    }
</style>
<body>
    <div class="banner-two"></div>
           <div class="tab-sec"><div class="row">
@include('teacher.layout.leftbar')
                <div class="col-md-8 tab-content-col">
                    <div class="tab-content">
                        <div class="tab-pane" id="class"></div>
                        <div class="tab-pane" id="course">Profile Tab.</div>
                        <div class="tab-pane" id="meeting">Messages Tab.</div>
                        <div class="tab-pane" id="teachers">Settings Tab.</div>
                        <div class="tab-pane" id="history">history Tab.</div>
                        <div class="tab-pane" id="notes">Notes Tab.</div>
                        <div class="tab-pane" id="chat">Chat Tab.</div>
                        <div class="tab-pane" id="payment">Payment Tab.</div>
                        <div class="tab-pane" id="#chat-one">Payment Tab.</div>
                        <div class="tab-pane active" id="#menu">
                            <div class="row">
                                <div class="col-md-6">
                                    <h1>DASHBORAD</h1>
                                </div>
                                <div class="col-md-6 text_center">
                                    <form class="search-form" action="#">
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                        <input type="text" placeholder="Python coding" name="search2">
                                    </form>
                                </div>
                            </div>
                            <div class="row plans-row">
                                <div class=" col-md-12 heading-1">
                                    <h2 class="bottom-line text-center">Plans</h2>
                                </div>
                            </div>
                            <div class="row">
                                <h1 class="mt-5" style="color:#000;">Choose the right payment option<br>that best suits you</h1>
                            </div>
                            <div class="price-table">
                                <div class="container pricing">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="card">
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
                                        <div class="col-lg-4 col-md-6 col-sm-12">
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
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="card">
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
                                        {{--  <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="card">
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
                                                    <button>Select Plan</button>
                                                </div>
                                            </div>
                                         </div>  --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="#profile"></div>
                        <div class="tab-pane" id="#block">Payment Tab.</div>
                        <div class="tab-pane" id="#status">Payment Tab.</div>
				    </div>
			    </div>
                <div class="clearfix"></div>
            </div></div>
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
</body>


@include('footer')

@endsection
