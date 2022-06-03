@extends('user.layout')
@section('content')
<style>
    .banner{
        position: relative;
    }
    .banner_text{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
    }
    .freeBtn{
        background: #C9C97E;
        border: 1px solid #707070;
        margin-top:10px;
font-weight:bolder;
        width: 39% !important;font-size: 25px;color:black
    }
 .text-white{
        color: white;font-size:50px;
    }
</style>
<div class="banner">
<div class="banner_text text-center">
    <h3 class="text-heading">Welcome To Virtually Teaching</h3>
    <h2 class="text-white">The Future Of Online Teaching</h2>
    <button class="btn freeBtn ">Start Free trail</button>
</div>

</div>
<div class="select-sec">
    <div class="container">
        <h2>SELECT THE PAYMENT OPTION AND CONTINUE</h2>
        <div class="row col-middle">
            <div class="col-md-7 form-col">
                <div class="row">
                    <form action="" id="payment_form">
                        <ul class="payment-form-row">
                            <li id="border_pay">
                                <input type="radio" id="html" name="payment_method" value="pay_pal">
                                <label for="html"><img src="{{url('/images/pay.png')}}" alt="Image"/></label>
                            </li>
                            <li id="border_visa">
                                <input type="radio" id="html" name="payment_method" value="Visa">
                                <label for="html"><img src="{{url('/images/visanew.png')}}" alt="Image"/></label>
                            </li>
                        </ul>
                        <label for="email" class="mt-5"><h3>PayPal E-mail </h3></label><br>
                        <input type="email" id="email" name="email">
                        <input type="submit" value="Pay Now">
                    </form>
                    <p>(You will be redirected to official payment gateway page)</p>
                </div>
            </div>
            <div class="col-md-5 order-sum-col">
                <h2>ORDER SUMMERY</h2>
                <div class="row basic-sec mb-4">
                    <div class="col-md-6">
                        <h3>Basic Plan</h3>
                    </div>
                    <div class="col-md-6">
                         <span>$10 / Month</span>
                    </div>
                </div>
                <h3>Plane Details</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vitae purus in enim dictum congue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer</p>
                <ul class="footer-link">
                    <li><i class="fa fa-check-circle-o" aria-hidden="true"></i>&nbsp; Watch your video anytime at your leisure</li>
                    <li><i class="fa fa-check-circle-o" aria-hidden="true"></i>&nbsp; Get 50 videos per month for $10 a month</li>
                    <li><i class="fa fa-check-circle-o" aria-hidden="true"></i>&nbsp; Watch videos anytime at your leisure</li>
                    <li><i class="fa fa-check-circle-o" aria-hidden="true"></i>&nbsp; Share your videos with you social media</li>
                </ul>
            </div>
        </div>
        <div class="back-to-sec">
            <h4>Back To Payment Option</h4>
            <hr>
        </div>
    </div>
</div>
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

@endsection
