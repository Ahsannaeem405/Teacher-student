@extends('student.dashboard-layout')

@section('title', 'Payment Type')

@section('content')

    <div class="select-sec" style="margin-bottom: 50%;">
        <div class="container" style="width: 100%">
            <h2>SELECT THE PAYMENT OPTION AND CONTINUE</h2>
            <div class="row col-middle">
                <div class="col-md-7 form-col">
                    <div class="row">
                        <form action="{{ route('student.subscribe-plan')}}" id="payment_form" method="POST">
                            @csrf
                          <input type="hidden" name="amount" value="{{$cart->course->price}}">
                          <input type="hidden" name="cart_id" value="{{$cart->id}}">
                          <input type="hidden" name="teacher_id" value="{{$cart->course->teacher_id}}">
                            <ul class="payment-form-row">
                                <li id="border_pay">
                                    <input type="radio" id="paypal_payment" name="payment_method" value="pay_pal">
                                    <label for="paypal"><img src="{{url('/images/pay.png')}}" alt="Image"/></label>
                                </li>

                                <li id="border_visa">
                                    <input type="radio" id="visa_payment" name="payment_method" value="visa">
                                    <label for="visa"><img src="{{url('/images/visanew.png')}}" alt="Image"/></label>
                                </li>
                            </ul>
                            <div id="paypal_input" style="display: none">
                                <label for="paypal_email" class="mt-5"><h3>PayPal E-mail </h3></label><br>
                                <input type="email" id="paypal_email" class="form-control"
                                       name="paypal_email" style="margin-bottom: 60%;">
                            </div>
                            <input type="submit" value="Pay Now" id="pay_btn" style="margin-bottom: 50%;" >
                        </form>
                        <p style="font-size: 18px;">(You will be redirected to official payment gateway page)</p>
                    </div>
                </div>
                <div class="col-md-5 order-sum-col home2-col-pay">
                    <h3>ORDER SUMMERY</h3>
                   
                    <div class="col-lg-10" style="margin: 0px; padding: 0px;">
                        <p><strong>{{$cart->course->course_name}}</strong></p>
                    </div>
    
                    <div class="col-lg-2">
                        <p style="color: #318215"><strong>{{$cart->course->price}}</strong></p>
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
    <script>
        $('#paypal_payment').on('click', function (){
            console.log('here');
            $('#paypal_input').removeAttr("style");
        });

        $('#visa_payment').on('click', function (){
            $('#paypal_input').attr('style', 'display:none');
        });

        $("#paypal_payment").on('click',function(){
            $('#pay_btn').prop("disabled", false);
        });

        $("#visa_payment").on('click',function(){
            $('#pay_btn').prop("disabled", false);
        });
    </script>
@endsection
