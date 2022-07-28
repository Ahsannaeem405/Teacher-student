@extends('admin.layout')

@section('title', 'Payment Type')

<link rel="stylesheet" href="{{ asset('css/style.css') }}">

@section('content')
    <div class="select-sec" style="margin-bottom: 50%;">
        <div class="container" style="width: 100%">
            <h2>SELECT THE PAYMENT OPTION AND CONTINUE</h2>
            <div class="row col-middle">
                <div class="col-md-7 form-col">
                    <div class="row">
                        <form action="#" id="payment_form" method="POST">
                            @csrf
{{--                            <input type="hidden" name="teacher_id" value="">--}}
{{--                            @php--}}
{{--                                $sum=0;--}}
{{--                                foreach($cart as $row_cart){--}}
{{--                                  $sum=$sum+$row_cart->course->price;--}}

{{--                                }--}}
{{--                            @endphp--}}
{{--                            --}}
{{--                            <input type="hidden" name="amount" value="{{$sum}}">--}}
                            <input type="hidden" name="amount" value="">
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
                    </div>

                    <div id="paypal_input" style="display: none">
                        <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
                            <!-- Paypal business test account email id so that you can collect the payments. -->
                            {{ csrf_field() }}
                            <input type='hidden' name='business'
                                   value="info@phpzag.com">
                            <input type="hidden" name="amount" value="{{ $withdraw_amount }}">
                            <!-- Buy Now button. -->
                            <input type="hidden" name="cmd" value="_xclick">
                            <!-- Details about the item that buyers will purchase. -->
                            <input type="hidden" name="currency_code" value="USD">
                            <!-- URLs -->
                            <input type='hidden' name='return' value="{{ url('success2')}}">
                            <input type="hidden" name="cmd" value="_xclick">
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="submit" name="submit"  value="Pay Now" id="pay_btn" style="margin-bottom: 50%;">
                                </div>
                            </div>
                        </form>
                    </div>

                    <p style="font-size: 18px;">(You will be redirected to official payment gateway page)</p>
                </div>
            </div>
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
