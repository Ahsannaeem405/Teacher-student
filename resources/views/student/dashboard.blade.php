@extends('student.dashboard-layout')

@section('title', 'Dashboard')

@section('content')
    <div class="container-fluid text_center pl_0" style="margin-bottom: 15%;">
        <div class="row">
            <div class="col-lg-6 pl_0" style="padding-left: 80px; padding-top: 30px;">
                <h3>DASHBOARD</h3>
            </div>
            @php
                $records = 1;
            @endphp

            <div class="col-lg-6" style="padding-top: 50px;">
                <button type="submit" class="search-btn">
                    <img src="{{ asset('images/search-icon.png') }}" alt="no image" width="20">
                </button>

                @if($records == 0)
                    <input type="text" class="search-input search-margin" placeholder="" name="search">
                @else
                    <input type="text" class="search-input" placeholder="python coding" name="search">
                @endif
            </div>
        </div>

        @if($records != 0)
            <div class="row" style="margin-top: 30px; display: flex; justify-content: center;">
                <div class="col-lg-1">
                    <img src="{{ asset('images/search-results.png') }}" alt="no image" width="30">
                </div>

                <div class="col-lg-3 text_center" style="padding: 0px; margin: 0px;">
                    <p>Search results <strong>'100'</strong></p>
                </div>
            </div>


            <div class="row dashboard-searchbar-bottom-line">
                <div class="col-lg-11" style="border: 1px solid #707070"></div>
            </div>
        @endif

        @if($records == 0)
            <div style="padding-top: 20px; text-align: center">
                <h3>My Classes</h3>
            </div>
        @endif

        @if($records != 0)
            <div class="row text_center" style="padding-left: 30px;">
                <div class="col-lg-3">
                   <div>
                       <span>
                           <i class="fa-solid fa-filter"></i>&nbsp;&nbsp;<strong>Filter:</strong>&nbsp;
                           Popular <i class="fa-solid fa-caret-down"></i>
                        </span>
                   </div>
                </div>
            </div>

            <div class="row" style="margin-top: 10px;">
                
                <div class="col-md-4 col-sm-12 class_learn" style="padding-left: 40px;">
                    <img src="{{ asset('images/sd-pic.png') }}" alt="no image" width="180">
                    <p style="margin-top: 15px; font-size: 16px; font-weight: bold;"><a href="{{ url('student/course/detail') }}"
                           style="text-decoration: none; color: black">
                            Learn python coding for<br>beginners
                        </a></p>

                    <div class="row " style="margin-top: 10px;">
                        <div class="col-md-5">
                            <p style="color: #C9C97E; font-size: 12px;">Physics Class</p>
                        </div>
                        <div class="col-md-6">
                            <p style="font-size: 10px; font-style: italic">Length: 3 hr 30 min</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-12 class_learn" style="padding-left: 40px;">
                    <img src="{{ asset('images/sd-pic.png') }}" alt="no image" width="180">
                    <p style="margin-top: 15px; font-size: 16px; font-weight: bold;"><a href="{{ url('student/course/detail') }}"
                         style="text-decoration: none; color: black">
                            Learn python coding for<br>beginners
                        </a></p>

                    <div class="row" style="margin-top: 10px;">
                        <div class="col-md-5">
                            <p style="color: #C9C97E; font-size: 12px;">Physics Class</p>
                        </div>
                        <div class="col-md-6">
                            <p style="font-size: 10px; font-style: italic">Length: 3 hr 30 min</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-12 class_learn" style="padding-left: 40px;">
                    <img src="{{ asset('images/sd-pic.png') }}" alt="no image" width="180">
                    <p style="margin-top: 15px; font-size: 16px; font-weight: bold;"><a href="{{ url('student/course/detail') }}"
                           style="text-decoration: none; color: black">
                        Learn python coding for<br>beginners
                        </a></p>

                    <div class="row" style="margin-top: 10px;">
                        <div class="col-md-5">
                            <p style="color: #C9C97E; font-size: 12px;">Physics Class</p>
                        </div>
                        <div class="col-md-6">
                            <p style="font-size: 10px; font-style: italic">Length: 3 hr 30 min</p>
                        </div>
                    </div>
                </div>
            </div>



            <div class="row" style="margin-top: 30px; margin-right: 40px; display: flex; justify-content: end;">
                <div class="col-lg-1" style="text-align: center; margin-right: -12px;">
                    <div style="padding: 3px 10px;
                    background-color: white;
                    color: #C9C97E;
                    border: 1px solid #C9C97E;
                    border-radius: 5px;
                    font-size: 2rem;">1</div>
                </div>

                <div class="col-lg-1" style="text-align: center; margin-right: -12px;">
                    <div style="padding: 3px 10px;font-size: 2rem; background-color: #C9C97E;
                    color: white; border: 1px solid #C9C97E; border-radius: 5px;">2</div>
                </div>

                <div class="col-lg-1" style="text-align: center; margin-right: -12px;">
                    <div style="padding: 3px 10px;font-size: 2rem; background-color: #C9C97E;
                    color: white; border: 1px solid #C9C97E; border-radius: 5px;">3</div>
                </div>

                <div class="col-lg-1" style="text-align: center; margin-right: -12px;">
                    <div style="padding: 3px 10px;font-size: 2rem; background-color: #C9C97E;
                    color: white; border: 1px solid #C9C97E; border-radius: 5px;">4</div>
                </div>
            </div>
        @endif
    </div>



@endsection




