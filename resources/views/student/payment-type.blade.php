@extends('student.dashboard-layout')

@section('title', 'Teacher Timeline')

@section('content')
    <div class="select-sec" style="margin-bottom: 50%;">
        <div class="container" style="width: 100%">
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
                            <input type="email" id="email" name="email" style="margin-bottom: 60%;">
                            <input type="submit" value="Pay Now" style="margin-bottom: 50%;">
                        </form>
                        <p style="font-size: 18px;">(You will be redirected to official payment gateway page)</p>
                    </div>
                </div>
                <div class="col-md-5 order-sum-col home2-col-pay">
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
                </div>
            </div>
{{--            <div class="back-to-sec">--}}
{{--                <h4>Back To Payment Option</h4>--}}
{{--                <hr>--}}
{{--            </div>--}}
        </div>
    </div>
@endsection

@section('JS')
    @include('student.layouts.footer')
@endsection
