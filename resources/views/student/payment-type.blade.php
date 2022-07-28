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
                          {{-- <input type="hidden" name="class_id" value="{{ $classId }}"> --}}
                          <input type="hidden" name="teacher_id" value="{{ $teacher_id }}">
                          @php
                          $sum=0;
                          foreach($cart as $row_cart){
                            $sum=$sum+$row_cart->course->price;

                          }
                          @endphp




                          <input type="hidden" name="amount" value="{{$sum}}">
                          {{-- <input type="hidden" name="cart_id" value="{{$cart->id}}"> --}}
                          {{-- <input type="hidden" name="teacher_id" value="{{$cart->course->teacher_id}}"> --}}
                            <ul class="payment-form-row">
                                <li id="border_pay">
                                    <input type="radio" class="payment_method" id="paypal_payment" name="payment_method" value="pay_pal">
                                    <label for="paypal"><img src="{{url('/images/pay.png')}}" alt="Image"/></label>
                                </li>

                                <li id="border_visa">
                                    <input type="radio" class="payment_method" id="visa_payment" name="payment_method" value="visa">
                                    <label for="visa"><img src="{{url('/images/visanew.png')}}" alt="Image"/></label>
                                </li>
                            </ul>

                            <input type="submit" value="Pay Now" id="stripe_btn" style="margin-bottom: 50%;" >
                        </form>

                        <div id="paypal_input" style="display: none">
                            <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
                                <!-- Paypal business test account email id so that you can collect the payments. -->
                                {{ csrf_field() }}
                                <input type='hidden' name='business'
                                    value="info@phpzag.com">
                                <input type="hidden" name="amount" value="{{ $sum }}">
                                <!-- Buy Now button. -->
                                <input type="hidden" name="cmd" value="_xclick">
                                <!-- Details about the item that buyers will purchase. -->


                                <input type="hidden" name="currency_code" value="USD">
                                <!-- URLs -->
                                <input type='hidden' name='return' value="{{ url('success2')}}">
                                <input type="hidden" name="cmd" value="_xclick">
                                <input type="submit" name="submit"  value="Pay Now" id="pay_btn" style="margin-bottom: 50%;">
                            </form>
                        </div>


                        <p style="font-size: 18px;">(You will be redirected to official payment gateway page)</p>
                    </div>
                </div>

                <div class="col-md-5 order-sum-col home2-col-pay">
                    <h3>ORDER SUMMERY</h3>
                    @foreach($cart as $cart)

                    <div class="col-lg-9" style="margin: 0px; padding: 0px;">
                        <p><strong>{{$cart->course->course_name}}</strong></p>
                    </div>

                    <div class="col-lg-3">
                        <p style="color: #318215"><strong>$ {{$cart->course->price}}</strong></p>
                    </div>
                    @endforeach

                    <h3>Plane Details</h3>
                    {{-- <p style="font-size: 18px; margin-bottom: 4%;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vitae
                        purus in enim dictum congue. Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Integer</p> --}}
                    <ul class="footer-link">
                        <li><i class="fa-solid fa-circle-check" aria-hidden="true" style="color: #318215"></i>&nbsp; Watch your video anytime at<br> your leisure</li>
                        <li><i class="fa-solid fa-circle-check" aria-hidden="true" style="color: #318215"></i>&nbsp; Learn more of Math equations<br> and stuff</li>
                        <li><i class="fa-solid fa-circle-check" aria-hidden="true" style="color: #318215"></i>&nbsp; Watch videos anytime at your<br> leisure</li>
                        <li><i class="fa-solid fa-circle-check" aria-hidden="true" style="color: #318215"></i>&nbsp; Share your videos with your<br> social media</li>
                    </ul>
                    <hr>
                     <div class="col-lg-9" style="margin: 0px; padding: 0px;">
                        <p><strong>Total</strong></p>
                    </div>

                    <div class="col-lg-3">
                        <p style="color: #318215"><strong>$ {{$sum}}</strong></p>
                    </div>

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
    <script>
        $(".payment_method").on('click',function(){
            var val=$('input[name="payment_method"]:checked').val();
            if(val=='pay_pal')
            {
               $('#paypal_input').attr('style', 'display:block');
               $('#stripe_btn').attr('style', 'display:none');
            }
            else{
                $('#paypal_input').attr('style', 'display:none');
                $('#stripe_btn').attr('style', 'display:block');
            }
        });
    </script>
@endsection
