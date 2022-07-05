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
                        <i class="fas fa-shopping-cart">{{App\Models\cart::where('user_id',auth()->user()->id)->count()}}</i>
                        &nbsp;&nbsp;&nbsp;&nbsp;<span>Add to Cart</span>
                    </a>

                </div>
            </div>
        </div>
        

        <div class="row mt-5 black-img-row" style="margin-bottom: 10%;">
            <div class="col-sm-4">
                @php
                    $imagePath = explode('.', !is_null($course->course_image) ? $course->course_image : 'do_not_delete.png');
                @endphp
                <div class="card">
                    <div class="card-body" style="text-align: center">
                        <img src="{{asset('images')."/". $imagePath[0].".".$imagePath[1]}}"
                             class="img-fluid" alt="No Image" width="290">
                    </div>
                </div>
                <span class="img-text" style="float: right">Lenght: {{ $course->class->class_duration }}</span>
            </div>
            <div class="col-sm-8">
                <div class="heading-1">
                    <h3><strong>{{$course->course_name}} <span class="span-class"
                                                               style="font-size: 22px;">({{ ucfirst($course->class->class_name) }} Class)</span></strong></h3>
                    <hr>
                    <h4>Course Fee <br><span class="span-class">{{ $course->price }}</span></h4>
                    <h4><i class="fa fa-calendar" aria-hidden="true"></i> Created Date <br><span class="span-class">{{ date('d-F-Y', strtotime($course->class->class_date)) }}</span></h4>
                    <h4><i class="fa fa-clock-o" aria-hidden="true"></i> Created Time <br> <span class="span-class">{{ $course->class->class_time }}</span>PM</h4>
                    <form action="{{url('student/add_cart')}}" method="post">
                        @csrf
                <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                <input type="hidden" name="course_id" value="{{$course->id}}">
                
                   <button type="submit" class="add-cart-btn"
                       style="text-decoration: none; color: white;border:none;" @if(isset($course->cart)) disabled @elseif($purchases!=null) disabled @else @endif>Add to Cart</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h3>Course Discription</h3>
                <p>{!! $course->course_description !!}</p>
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
                
            </div>
            <div class="col-md-3"></div>
        </div>

        <div class="row" style="margin-top: 20px;">
          @foreach($lectures as $lecture)
            <div class="col-md-3">
                <a href="#" download>
                    <video width="200" height="140" controls>
                        <source src='{{asset("/videos/$lecture->course_doc")}}' type="video/mp4">
                    </video>
                </a>
            </div>
          @endforeach
        </div>


    </div>
@endsection

