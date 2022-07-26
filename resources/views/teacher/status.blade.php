@extends('teacher.dashboard-layout')

@section('title', 'Status')

@section('content')
    <div class="container-fluid" >
        <div class="row" >
            <div class="col-lg-12 text_center" style="padding-top: 30px; text-align: center">
                <h3>YOUR STATUS</h3>
            </div>
        </div>

        <div class="row status" >
            <div class="col-lg-12" style="border: 1px solid #707070"></div>
        </div>

        @if(isset($plan) && isset($expiry))
            <div class="row text_center">
                <div class="col-lg-10 col-md-10">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="col-md-3">
                                <h4 style="color: #585858"><strong>Current Plan:</strong></h4>
                            </div>
                            <div class="col-md-3">
                                <h4><strong>{{ (!empty($plan)) ? $plan : '' }}</strong></h4>
                            </div>
                            <div class="col-md-1">
                                <a href="#" style="text-decoration: none">
                                    <h5 style="color: #C9C97E;
                        font-size: 10px; padding-top: 5px;"><strong>DETAILS</strong></h5>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="col-md-3">
                                <h4 style="color: #585858"><strong>Valid till:</strong></h4>
                            </div>
                            <div class="col-md-3">
                                <h4><strong>{{ date('F-m-Y', strtotime((!empty($expriy)) ? $expriy : '')) }}</strong></h4>
                            </div>
                            <div class="col-md-1">
                                <a href="#" style="text-decoration: none">
                                    <h5 style="color: #C9C97E;
                        font-size: 10px; padding-top: 5px;"><strong>UPGRADE</strong></h5>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="col-md-3">
                                <h4 style="color: #585858"><strong>Available Videos:</strong></h4>
                            </div>
                            <div class="col-md-3">
                                <h4><strong>{{ ($remain_vids > '7') ? $remain_vids.'/50' : $remain_vids.'/7' }}</strong></h4>
                            </div>
                            <div class="col-md-1">
                                <a href="#" style="text-decoration: none">
                                    <h5 style="color: #C9C97E;
                        font-size: 10px; padding-top: 5px;"><strong>UPGRADE</strong></h5>
                                </a>
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
        @else
            <div class="row text_center">
                <div class="col-lg-10 col-md-10">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="col-md-3">
                                <h4 style="color: #585858"><strong>Current Plan:</strong></h4>
                            </div>
                            <div class="col-md-3">
                                <h4><strong></strong></h4>
                            </div>
                            <div class="col-md-1">
                                <a href="#" style="text-decoration: none">
                                    <h5 style="color: #C9C97E;
                        font-size: 10px; padding-top: 5px;"><strong>DETAILS</strong></h5>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="col-md-3">
                                <h4 style="color: #585858"><strong>Valid till:</strong></h4>
                            </div>
                            <div class="col-md-3">
                                <h4><strong></strong></h4>
                            </div>
                            <div class="col-md-1">
                                <a href="#" style="text-decoration: none">
                                    <h5 style="color: #C9C97E;
                        font-size: 10px; padding-top: 5px;"><strong>UPGRADE</strong></h5>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="col-md-3">
                                <h4 style="color: #585858"><strong>Available Videos:</strong></h4>
                            </div>
                            <div class="col-md-3">
                                <h4><strong></strong></h4>
                            </div>
                            <div class="col-md-1">
                                <a href="#" style="text-decoration: none">
                                    <h5 style="color: #C9C97E;
                        font-size: 10px; padding-top: 5px;"><strong>UPGRADE</strong></h5>
                                </a>
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
        @endif
    </div>
@endsection

