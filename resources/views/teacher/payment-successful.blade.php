@extends('teacher.dashboard-layout')

@section('title', 'Payment Successfull')

@section('content')
    <div class="select-sec" style="margin-bottom: 50%;">
        <div class="container" style="width: 100%">
            <div class="row" style="margin-bottom: 1%">
                <div class="col-lg-1" style="padding-top: 22px;">
                    <i class="fa-solid fa-circle-check"
                       style="color: #318215; font-size: 36px;"></i>
                </div>
                <div class="col-lg-8">
                    <h3 style="color: #C9C97E;">Payment has successfully completed</h3>
                </div>
            </div>

            <div class="row dashboard-searchbar-bottom-line">
                <div class="col-lg-12" style="border: 1px solid #707070"></div>
            </div>

            <div class="row">
                <div class="col-md-7">
                    <div class="col-lg-12">
                        <h4 style="color: #318215"><strong>You account is upgraded to the basic place</strong></h4>
                    </div>

                    <div class="col-lg-12" style="margin-bottom: 2%;">
                        <p>You can enjoy the related features</p>
                    </div>

                    <div class="col-lg-12 col-md-12" style="margin-bottom: 25%;">
                        <img src="{{ asset('images/payment-successfull.png') }}"
                             width="200" alt="no image">
                    </div>

                    <div class="col-lg-6 col-md-6" style="text-align: end">
                        <a href="#" style="text-decoration: none; color: white"
                           class="payment-home-btn">Home Page</a>
                    </div>
                </div>

                <div class="col-md-5 order-sum-col home2-col-pay" style="padding-top: 0px;">
                    <h3>ORDER SUMMERY</h3>
                    <div class="row basic-sec mb-4">
                        <div class="col-md-10">
                            <p style="color: black; font-size: 17px;"><strong>Learn python coding for beginners </strong></p>
                        </div>
                        <div class="col-md-2">
                            <p style="color: #318215"><strong>$10</strong></p>
                        </div>
                    </div>
                    <h3>Plane Details</h3>
                    <p style="font-size: 18px; margin-bottom: 4%;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vitae
                        purus in enim dictum congue. Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Integer</p>
                    <ul class="footer-link">
                        <li><i class="fa-solid fa-circle-check" aria-hidden="true" style="color: #318215"></i>&nbsp; Watch your video anytime at<br> your leisure</li>
                        <li><i class="fa-solid fa-circle-check" aria-hidden="true" style="color: #318215"></i>&nbsp; Learn more of Math equations<br> and stuff</li>
                        <li><i class="fa-solid fa-circle-check" aria-hidden="true" style="color: #318215"></i>&nbsp; Watch videos anytime at your<br> leisure</li>
                        <li><i class="fa-solid fa-circle-check" aria-hidden="true" style="color: #318215"></i>&nbsp; Share your videos with your<br> social media</li>
                    </ul>

                    <div class="row" style="margin-top: 30%">
                        <div class="col-lg-12 col-md-12">
                            <button type="button" class="account-upgrade">Your account is upgraded</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

