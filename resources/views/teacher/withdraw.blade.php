@extends('teacher.dashboard-layout')

@section('title', 'Payment Withdraw')

@section('content')
    <div class="container-fluid" >
        <div class="row" >
            <div class="col-lg-12 text_center" style="padding-top: 30px; text-align: center">
                <h3>ACCOUNT DETAILS</h3>
            </div>
        </div>



        <div class="card course_card">
            <div class="card-header">
                <div class="row">
                    <div class="col-lg-12 col-md-12"
                            style="padding-right: 15px; padding-top: 25px;">
                        <div class="col-lg-12" style="text-align: start; ;
                        padding-bottom: 1%; border-bottom: 0.5px solid grey">
                            @php
                                $imagePath = !is_null(auth()->user()->image) ? auth()->user()->image : 'do_not_delete.png';
                            @endphp
                            <img src="{{asset('images')."/". $imagePath}}"
                                 class="img-fluid" alt="No Image" width="40" style="border-radius: 50%;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row" style="padding-top: 20px">
                    <div class="col-lg-12 col-md-12">
                        <div class="col-md-3" style="padding-left: 0">
                            <h4 style="color: #585858"><strong>Name:</strong></h4>
                        </div>
                        <div class="col-md-3">
                            <h4><strong>{{ ucwords(auth()->user()->name) }}</strong></h4>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <h4 style="color: #585858"><strong>Current Balance:</strong></h4>
                    </div>

                    <div class="col-lg-3 col-md-3">
                        <h4>
                            <strong>{{ '$'. (!empty(auth()->user()->balance) ? auth()->user()->balance : '0' )  }}</strong>
                        </h4>
                    </div>

                    <div class="col-md-1">
                        <a href="#" style="text-decoration: none" data-toggle="modal" data-target="#exampleModal">
                            <h5 style="color: #C9C97E; font-size: 10px; padding-top: 5px;">
                                <strong>WITHDRAW</strong></h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" >
            <div class="col-lg-12 text_center" style="padding-top: 30px; text-align: center">
                <h3>Withdraw Requests</h3>
            </div>
        </div>

        <div class="card-block table-border-style">
            <div class="table-responsive">
                <table class="table table-hover text-center" id="requests">
                    <thead>
                    <tr>
                        <th>#</th>
{{--                        <th>Teacher Name</th>--}}
                        <th>Payment Type</th>
                        <th>Request Amount</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php
                        $count = 1;

                    @endphp
                    @forelse ( $withdraws as $withdraw )
                        <tr>
                            <td style="text-align: start !important;">{{ $count++ }}</td>
                            <td style="text-align: start !important;">{{ (!empty($withdraw->paypal_email) ? 'Paypal' : 'Stripe') }}</td>
                            <td style="text-align: start !important;">${{ $withdraw->withdraw_amount }}</td>
                            <td style="text-align: start !important;">{{ ucfirst($withdraw->status) }}</td>
                        </tr>
                    @empty

                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    @include('teacher.withdraw-modal')
@endsection

@section('JS')
    <script>
        $('#payment_type').on('change', function (){
            if($(this).val() === 'paypal'){
                $('#paypal').removeAttr("style");
                $('#stripe').attr("style", "display:none");
            }else{
                $('#stripe').removeAttr("style");
                $('#paypal').attr("style", "display:none");
            }
        });
    </script>
@endsection
