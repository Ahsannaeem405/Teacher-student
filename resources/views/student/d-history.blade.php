@extends('student.dashboard-layout')

@section('title', 'History')

@section('content')
    <div class="container-fluid" style="margin-bottom: 15%;">
        <div class="row">
            <div class="col-lg-6" style="padding-left: 80px; padding-top: 30px;">
                <h3>DASHBOARD</h3>
            </div>
            @php
                $records = 0;
            @endphp

            <div class="col-lg-6" style="padding-top: 50px;">
                <button type="submit" class="search-btn">
                    <img src="{{ asset('images/search-icon.png') }}" alt="no image" width="20">
                </button>

                @if($records == 0)
                    <input type="text" class="search-input" placeholder="" name="search">
                @else
                    <input type="text" class="search-input" placeholder="python coding" name="search">
                @endif
            </div>
        </div>

        <div class="row" style="margin-top: 40px; margin-bottom: 0px; padding-bottom: 0px;">
            <div class="col-lg-6" style="text-align: end; margin-bottom: 0px; padding-bottom: 0px;">
                <p style="font-size: 20px; font-weight: bold">Search History</p>
            </div>

            <div class="col-lg-6" style="text-align: end; padding-top: 8px; margin-bottom: 0px; padding-bottom: 0px;">
                <p></p>
            </div>
        </div>

        <div class="row dashboard-searchbar-bottom-line">
            <div class="col-lg-12" style="border: 1px solid #707070"></div>
        </div>

        <div class="row hist_list_mrgn_btm" style="margin-top: 15px;">
            <div class="col-sm-9">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>

            <div class="col-sm-2">
                <p>Date: 5 May 2021</p>
            </div>

            <div class="col-sm-1">
                <a href="#">
                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" style="color: red"
                         stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                         class="css-i6dzq1"><polyline points="3 6 5 6 21 6"></polyline>
                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                        <line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line>
                    </svg>
                </a>
            </div>
        </div>

        <div class="row hist_list_mrgn_btm" style="margin-top: 15px;">
            <div class="col-sm-9">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>

            <div class="col-sm-2">
                <p>Date: 5 May 2021</p>
            </div>

            <div class="col-sm-1">
                <a href="#">
                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" style="color: red"
                         stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                         class="css-i6dzq1"><polyline points="3 6 5 6 21 6"></polyline>
                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                        <line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line>
                    </svg>
                </a>
            </div>
        </div>




    </div>

@endsection

@section('JS')
    @include('student.layouts.footer')
@endsection
