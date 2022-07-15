@extends('teacher.dashboard-layout')

@section('title', 'Class Detail')

@section('content')
    <div class="container-fluid" style="margin-bottom: 50%;">
        <div class="row" style="margin-bottom: 2%;">
            <div class="col-lg-8" style="padding-top: 30px;">
                <h3>DASHBOARD / <span style="color: #C9C97E">CLASS DETAILS</span></h3>
            </div>
        </div>

        <div class="row mt-5 black-img-row" style="margin-bottom: 10%;">
            @php
                $imagePath = explode('.', !is_null($class->class_image) ? $class->class_image : 'do_not_delete.png');
            @endphp
            <div class="col-sm-4">
                <img src="{{asset('images')."/". $imagePath[0].".".$imagePath[1]}}"
                     class="img-fluid" alt="No Image" width="260">
            </div>
            <div class="col-sm-8">
                <div class="heading-1">
                    <h2><strong>{{ $class->class_title }} <span class="course_span_class">({{ ucfirst($class->class_name) }} Class)</span></strong></h2>
                    <hr>
                    <h4>Teacher <br><span class="course_span_class">{{ ucwords($class->teacher_name) }}</span></h4>
                    <h4><i class="fa fa-calendar" aria-hidden="true"></i> Created Date <br><span class="course_span_class">{{ date('d-F-Y', strtotime($class->class_date)) }}</span></h4>
                    <h4><i class="fa fa-clock-o" aria-hidden="true"></i> Created Time <br> <span class="course_span_class">{{ $class->class_time }}</span></h4>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h3>Course Discription</h3>
                <p>
                    {!! $class->class_description !!}
                </p>
            </div>
        </div>
    </div>
@endsection

