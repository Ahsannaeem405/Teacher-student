@extends('student.dashboard-layout')

@section('title', 'Course Detail')

@section('content')
    <div class="container-fluid" style="margin-bottom: 50%;">
        <div class="row" style="margin-bottom: 2%;">
            <div class="col-lg-8" style="padding-top: 30px;">
                <h3>DASHBOARD / <span style="color: #C9C97E">COURSE DETAILS</span></h3>
            </div>

            <div class="col-lg-4" style="padding-top: 40px;">
                <div class="add-to-cart">
                    <a href="{{ route('student.add-to-cart') }}">
                        <i class="fas fa-shopping-cart"></i>
                        &nbsp;&nbsp;&nbsp;&nbsp;<span>Add to Cart</span>
                    </a>

                </div>
            </div>
        </div>

        <div class="row mt-5 black-img-row" style="margin-bottom: 10%;">
            <div class="col-sm-4">
                <img src="{{url('/images/black.png')}}" width="260" alt="Image"/>
                <span class="img-text" style="float: right">Lenght: 3 hr 30 Min</span>
            </div>
            <div class="col-sm-8">
                <div class="heading-1">
                    <h2><strong>Learn python coding for <br> beginners <span class="span-class">(Physics Class)</span></strong></h2>
                    <hr>
                    <h4>Teacher <br><span class="span-class">Andrew Jonson</span></h4>
                    <h4><i class="fa fa-calendar" aria-hidden="true"></i> Created Date <br><span class="span-class">00/00/2021</span></h4>
                    <h4><i class="fa fa-clock-o" aria-hidden="true"></i> Created Time <br> <span class="span-class">00:00</span>PM</h4>
                    <a href="#" class="add-cart-btn"
                       style="text-decoration: none; color: white;">Add to Cart</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h3>Course Discription</h3>
                <p>
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                    nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,
                    sed diam voluptua. At vero eos et accusam et justo duo dolores et ea
                    rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
                    ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing
                    elitr. Invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                    At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd
                    gubergren, no sea takimata.
                </p>
            </div>
        </div>

        <div class="row mt-1">
            <div class=" col-md-9 heading-1">
                <h2 class="bottom-line">Related Classes</h2>
            </div>
            <div class="col-md-3"></div>
        </div>

        <div class="row mt-4">
            <div class="col-md-2">
                <div class="icon-box">
                    <img src="{{url('/images/clock.png')}}" alt="Image"/><br>
                    <span>Physical Class</span>
                </div>
            </div>
            <div class="col-md-2">
                <div class="icon-box">
                    <img src="{{url('/images/clock.png')}}" alt="Image"/><br>
                    <span>Chemistry Class</span>
                </div>
            </div>
            <div class="col-md-2">
                <div class="icon-box">
                    <img src="{{url('/images/clock.png')}}" alt="Image"/><br>
                    <span> Geology Class</span>
                </div>
            </div>
            <div class="col-md-2">
                <div class="icon-box">
                    <img src="{{url('/images/clock.png')}}" alt="Image"/><br>
                    <span>Another Class</span>
                </div>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-2"></div>
        </div>

        <div class="row" style="margin-top: 30px;">
            <div class=" col-md-9 heading-1 float-text">
                <h2 class="bottom-line"> Class session videos / documents</h2>
                <span class="span-class"
                style="padding-top: 25px;"><i class="fa fa-download" aria-hidden="true"></i> download</span>
            </div>
            <div class="col-md-3"></div>
        </div>

        <div class="row" style="margin-top: 20px;">
            <div class="col-md-3">
                <div class="col-12">
                    <a href="/images/play.png" download>
                        <img src="{{url('/images/play-one.png')}}" width="200" alt="Image"/>
                    </a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="col-12">
                    <a href="/images/play.png" download>
                        <img src="{{url('/images/play-one.png')}}" width="200" alt="Image"/>
                    </a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="col-12">
                    <a href="/images/play.png" download>
                        <img src="{{url('/images/play-one.png')}}" width="200" alt="Image"/>
                    </a>
                </div>
            </div>
        </div>


    </div>
@endsection


