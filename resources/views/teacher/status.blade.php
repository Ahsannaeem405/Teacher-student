@extends('teacher.dashboard-layout')

@section('title', 'Status')

@section('content')
    <div class="container-fluid" >
        <div class="row" >
            <div class="col-lg-8" style="padding-top: 30px;">
                <h3>YOUR STATUS</h3>
            </div>
        </div>

        <div class="row status" style="">
            <div class="col-lg-12" style="border: 1px solid #707070"></div>
        </div>

        <div class="row">
            <div class="col-lg-10 col-md-10">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="col-md-3">
                            <h4 style="color: #585858"><strong>Current Plan:</strong></h4>
                        </div>
                        <div class="col-md-3">
                            <h4><strong>Basic</strong></h4>
                        </div>
                        <div class="col-md-1">
                            <h5 style="color: #C9C97E;
                        font-size: 10px; padding-top: 5px;"><strong>DETAILS</strong></h5>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="col-md-3">
                            <h4 style="color: #585858"><strong>Valid till:</strong></h4>
                        </div>
                        <div class="col-md-3">
                            <h4><strong>August 07,21</strong></h4>
                        </div>
                        <div class="col-md-1">
                            <h5 style="color: #C9C97E;
                        font-size: 10px; padding-top: 5px;"><strong>UPGRADE</strong></h5>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="col-md-3">
                            <h4 style="color: #585858"><strong>Available Videos:</strong></h4>
                        </div>
                        <div class="col-md-3">
                            <h4><strong>1/3</strong></h4>
                        </div>
                        <div class="col-md-1">
                            <h5 style="color: #C9C97E;
                        font-size: 10px; padding-top: 5px;"><strong>UPGRADE</strong></h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-2" style="padding-right: 0px; padding-top: 25px;">
                <div class="col-lg-12" style="text-align: end;">
                    <img src="{{ asset('images/dt1.png') }}" alt="no image" width="30">
                </div>
            </div>
        </div>
    </div>
@endsection

@section('JS')
    @include('teacher.layouts.footer')
@endsection
