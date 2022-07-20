@extends('teacher.dashboard-layout')

@section('title', 'Pricing Menu')

@section('content')
    <div class="container-fluid" style="margin-bottom: 15%;">
        <div class="row">
            <div class="col-lg-8 pl_0 text_center" style="padding-top: 30px; padding-left: 0px;">
                <h3>DASHBOARD</h3>
            </div>

            <div class="col-lg-4 text_center" style="padding-top: 50px; text-align: end">
                <button type="submit" class="search-btn">
                    <img src="{{ asset('images/search-icon.png') }}" alt="no image" width="20">
                </button>

                <input type="text" class="search-input" placeholder="python coding" name="search">
            </div>
        </div>

        <div class="row payment">
            <div class="col-lg-6" style="text-align: center">
                <p style="font-size: 22px; font-weight: bold">Payment</p>
            </div>
        </div>

        <div class="row dashboard-searchbar-bottom-line">
            <div class="col-lg-12" style="border: 1px solid #707070"></div>
        </div>

        <div class="row" style="margin-bottom: 50px;">
            <div class="col-lg-8 pl_0 pr_0 text_center">
                <h3>Choose the right payment option<br>
                    that best suits you.</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="container pricing" style="width: 100%">
                    <div class="row row_width padding_4_col2 padding_4_col">
                        <div class="col-lg-4  col-md-6 col-sm-12">
                            <div class="col-12"
                                 style="border: 1px solid #C9C97E; background-color: #f5f5f5; padding-bottom: 6%">
                                <div class="card border">
                                    <div class="card-body ">
                                        <h4>Free</h4>
                                        <div class="price">
                                            <h2 class="free-plan"><i>Free</i></h2>
                                        </div>
                                        <p class="card-text" style="color: #C9C97E">Features include:</p>
                                        <ul>
                                            <li class="list-unstyled plan_list"> <img src="{{ asset('images/tick.png') }}" width="19" height="18" alt="" srcset=""> <span class="l_p"></span> <span class="li_font">Watch <span style="color: #C9C97E">three</span>  video for free</span></li>
                                            <li class="list-unstyled plan_list"> <img src="{{ asset('images/tick.png') }}" width="24" height="18" alt="" srcset=""> <span class="l_p"></span> <span class="li_font">Watch your videos anytime at your leisure </span></li>
                                            <li class="list-unstyled plan_list"> <img src="{{ asset('images/tick.png') }}" width="24" height="18" alt="" srcset=""> <span class="l_p"></span> <span class="li_font">Share your videos with your social media</span></li>
                                            <li class="list-unstyled plan_list"> <img src="{{ asset('images/tick.png') }}" width="24" height="18" alt="" srcset=""> <span class="l_p"></span> <span class="li_font">Share your videos with your social media</span></li>
                                        </ul>
                                        <a href="{{ route('teacher.trial-menu', ['type' => encrypt('free')]) }}"
                                           style="color: white; background-color: #318215; text-decoration: none;
                                                border-radius: 10px; padding: 10px 45px;">Select Plan</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="col-12" style="background-color: #C9C97E; padding-bottom: 60px;">
                                <div class="card border">
                                    <div class="card-body">
                                        <h4 style="color: white">Basic</h4>
                                        <div class="basic-plan">
                                             <p>$10 / <span style="font-size: 12px;">Month</span></p>
                                        </div>

                                        <div class="row" style="display: flex; justify-content: center">
                                            <div class="col-lg-11">
                                                <ul style="background-color: #dfdbdb63; color: white">
                                                    <li class="list-unstyled plan_list"> <img src="{{ asset('images/tick.png') }}" width="19" height="18" alt="" srcset=""> <span class="l_p"></span> <span class="li_font">Watch your video anytime at your leisure</span></li>
                                                    <li class="list-unstyled plan_list"> <img src="{{ asset('images/tick.png') }}" width="24" height="18" alt="" srcset=""> <span class="l_p"></span> <span class="li_font">Get <span style="color: black">50</span> videos per month for <span style="color: black">10$</span> a month</span></li>
                                                    <li class="list-unstyled plan_list"> <img src="{{ asset('images/tick.png') }}" width="24" height="18" alt="" srcset=""> <span class="l_p"></span> <span class="li_font">Watch videos anytime at your leisure</span></li>
                                                    <li class="list-unstyled plan_list"> <img src="{{ asset('images/tick.png') }}" width="24" height="18" alt="" srcset=""> <span class="l_p"></span> <span class="li_font">Share your videos with your social media</span></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <a href="{{ route('teacher.payment-type', ['type' => encrypt('10')]) }}"
                                                   style="color: white; background-color: #318215; text-decoration: none;
                                                   border-radius: 10px; padding: 10px 45px;">Select Plan</a>
{{--                                                <button type="button"--}}
{{--                                                style="color: white; border: 2px solid white;--}}
{{--                                                border-radius: 10px; padding: 10px 45px;">Select Plan</button>--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="col-12" style="border: 1px solid #C9C97E;
                            background-color: #f5f5f5; padding-bottom: 20px;">
                                <div class="card border">
                                    <div class="card-body">
                                        <h4>Enterprise</h4>
                                        <div class="enterprice-plan">
                                            <p>$25 / <span style="font-size: 12px;">Month</span></p>
                                        </div>

                                        <div class="row" style="display: flex; justify-content: center">
                                            <div class="col-lg-11">
                                                <ul>
                                                    <li class="list-unstyled plan_list"> <img src="{{ asset('images/tick.png') }}" width="19" height="18" alt="" srcset=""> <span class="l_p"></span> <span class="li_font">Watch your video anytime at your leisure</span></li>
                                                    <li class="list-unstyled plan_list"> <img src="{{ asset('images/tick.png') }}" width="24" height="18" alt="" srcset=""> <span class="l_p"></span> <span class="li_font">Get unlimited videos per month for <span style="color: #C9C97E">25$</span> a month</span></li>
                                                    <li class="list-unstyled plan_list"> <img src="{{ asset('images/tick.png') }}" width="24" height="18" alt="" srcset=""> <span class="l_p"></span> <span class="li_font">Watch videos anytime at your leisure</span></li>
                                                    <li class="list-unstyled plan_list"> <img src="{{ asset('images/tick.png') }}" width="24" height="18" alt="" srcset=""> <span class="l_p"></span> <span class="li_font">Share your videos with your social media</span></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <a href="{{ route('teacher.payment-type', ['type' => encrypt('25')]) }}"
                                                   style="color: white; background-color: #318215; text-decoration: none;
                                                    border-radius: 10px; padding: 10px 45px;">
                                                    Select Plan</a>
{{--                                                <button type="button"--}}
{{--                                                        style="color: white;--}}
{{--                                                border-radius: 10px; padding: 10px 45px;">Select Plan</button>--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

{{--                        <div class="col-lg-3  col-md-6 col-sm-12">--}}
{{--                            <div class="card border">--}}
{{--                                <div class="card-body">--}}
{{--                                    <h4>Enterprise</h4>--}}
{{--                                    <div class="price">--}}
{{--                                        <h2 class="">$300 <br><span>month</span></h2>--}}
{{--                                    </div>--}}
{{--                                    <p class="card-text">Features include:</p>--}}
{{--                                    <ul>--}}
{{--                                        <li class="list-unstyled plan_list"> <img src="{{ asset('images/tick.png') }}" width="24" height="18" alt="" srcset=""> <span class="l_p"></span> <span class="li_font"> Upload your video any time at your liesure</span></li>--}}
{{--                                        <li class="list-unstyled plan_list"> <img src="{{ asset('images/tick.png') }}" width="24" height="18" alt="" srcset=""> <span class="l_p"></span> <span class="li_font">Upload <strong>unlimited videos</strong>  per month for<strong>$300</strong> a month</span></li>--}}
{{--                                        <li class="list-unstyled plan_list"> <img src="{{ asset('images/tick.png') }}" width="24" height="18" alt="" srcset=""> <span class="l_p"></span> <span class="li_font"> Watch videos anytime at your leisure</span></li>--}}
{{--                                        <li class="list-unstyled plan_list"> <img src="{{ asset('images/tick.png') }}" width="24" height="18" alt="" srcset=""> <span class="l_p"></span> <span class="li_font"> Share your videos with your social media</span></li>--}}
{{--                                    </ul>--}}
{{--                                    <a class="btn priceBtn" href="{{url('subscribe_plan')}}?price=300">Select Plan</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

