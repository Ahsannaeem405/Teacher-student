@extends('teacher.dashboard-layout')

@section('title', 'Course Detail')

@section('content')
    <div class="container-fluid" style="margin-bottom: 50%;">
        <div class="row" style="margin-bottom: 2%;">
            <div class="col-lg-8" style="padding-top: 30px;">
                <h3>DASHBOARD / <span style="color: #C9C97E">COURSE DETAILS</span></h3>
            </div>
        </div>

        <div class="row mt-5 black-img-row" style="margin-bottom: 10%;">
            <div class="col-sm-4">
                @php
                    $imagePath = !is_null($course->course_image) ? $course->course_image : 'do_not_delete.png';
                @endphp
                <div class="card">
                    <div class="card-body" style="text-align: center">
                        <img src="{{asset('images')."/". $imagePath }}"
                             class="img-fluid" alt="No Image" width="290">
                    </div>
                </div>
                <span class="img-text" style="float: right">Lenght: {{ $course->class_duration }}</span>
            </div>
            <div class="col-sm-8">
                <div class="heading-1">
                    <h3><strong>{{$course->course_name}}<span class="course_span_class"
                                                               style="font-size: 22px;">({{ ucfirst($course->class_name) }} Class)</span></strong></h3>
                    <hr>
                    <h4>Teacher <br><span class="course_span_class">{{ $course->teacher_name }}</span></h4>
                    <h4><i class="fa fa-calendar" aria-hidden="true"></i> Created Date <br>
                        <span class="course_span_class">{{ date('d-F-Y', strtotime($course->class_date)) }}</span></h4>
                    <h4><i class="fa fa-clock-o" aria-hidden="true"></i> Created Time <br>
                        <span class="course_span_class">{{ $course->class_time }}</span>PM</h4>
{{--                    <a href="#" class="add-cart-btn"--}}
{{--                       style="text-decoration: none; color: white;">Add to Cart</a>--}}
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
            @foreach($classes as $class)
                <div class="col-md-2" style="text-align: center">
                    <div class="icon-box" style="text-align: center">
                        @php
                            $imagePath = !is_null($class->class_image) ? $class->class_image : 'do_not_delete.png';
                        @endphp
                        <img src="{{ asset('images')."/". $imagePath}}" class="img-fluid" alt="No Image" width="100">
                        <span>{{ ucfirst($class->class_name) }} Class</span>
                        <span>{{ strlen($class->class_title) > 15 ? substr($class->class_title,0,15)."..." : $class->class_title }}</span>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="row" style="margin-top: 30px;">
            <div class=" col-md-9 heading-1 float-text">
                <h2 class="bottom-line"> Class session videos / documents</h2>
                <a href="{{ route('teacher.zip-file', ['name' => encrypt($course->course_name)]) }}" class="span-class">
                    <i class="fa fa-download" aria-hidden="true"></i>Download</a>
            </div>
            <div class="col-md-3">
                <form action="{{ route('teacher.course-video') }}" method="post" id="course_vid_form" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="course_id" value="{{ $course->id }}">
                    <input type="hidden" name="course_name" value="{{ $course->course_name }}">
                    <label for="course_vid" style="padding-top: 25px; color: #C8C97D; font-size: 25px;">
                        <i class="fa fa-plus-circle"></i>
                    </label>
                    <input type="file" id="course_vid" name="course_vid" style="visibility: hidden"
                           accept="video/mp4, webm, ogg">
                </form>
            </div>
        </div>

        <div class="row" style="margin-top: 20px;">
          @foreach($lectures as $lecture)
            <div class="col-md-3">
                <video width="200" height="140" controls>
                    <source src='{{asset("/videos/$lecture->course_doc")}}' type="video/mp4">
                </video>
                <a href="{{asset("/videos/$lecture->course_doc")}}" download class="btn btn-info">Download</a>
            </div>
          @endforeach
        </div>
    </div>
@endsection

@section('JS')
    <script>
        $('#course_vid').on('change', function (){
           $('#course_vid_form').submit();
        });
    </script>
@endsection
