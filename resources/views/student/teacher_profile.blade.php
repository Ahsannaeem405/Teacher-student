@extends('student.dashboard-layout')

@section('title', 'Teacher Timeline')

@section('css')
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .rate {
            float: left;
            height: 46px;
            padding: 0 10px;
        }
        .rate:not(:checked) > input {
            position:absolute;
            top:-9999px;
        }
        .rate:not(:checked) > label {
            float:right;
            width:1em;
            overflow:hidden;
            white-space:nowrap;
            cursor:pointer;
            font-size:30px;
            color:#ccc;
        }
        .rate:not(:checked) > label:before {
            content: '★ ';
        }
        .rate > input:checked ~ label {
            color: #C9C97E;
        }
        .rate:not(:checked) > label:hover,
        .rate:not(:checked) > label:hover ~ label {
            color: #C9C97E;
        }
        .rate > input:checked + label:hover,
        .rate > input:checked + label:hover ~ label,
        .rate > input:checked ~ label:hover,
        .rate > input:checked ~ label:hover ~ label,
        .rate > label:hover ~ input:checked ~ label {
            color: #C9C97E;
        }
    </style>
@endsection


@section('content')
    <div class="container-fluid" style="margin-bottom: 50%;">
        <div class="row" style="margin-bottom: 2%;">
            <div class="col-lg-8" style="padding-top: 30px;">
                <h3>DASHBOARD / <span style="color: #C9C97E">TEACHER PROFILE</span></h3>
            </div>

{{--            <div class="col-lg-4" style="padding-top: 50px;">--}}
{{--                <button type="submit" class="search-btn">--}}
{{--                    <img src="{{ asset('images/search-icon.png') }}" alt="no image" width="20">--}}
{{--                </button>--}}

{{--                <input type="text" class="search-input" placeholder="python coding" name="filter">--}}
{{--            </div>--}}
        </div>

        <div class="row" style="margin-top: 30px; display: flex; justify-content: center;">
            <div class="col-lg-3" style="font-size: 22px;">
                <p><strong>Teacher Courses</strong></p>
            </div>
        </div>

        <div class="row dashboard-searchbar-bottom-line">
            <div class="col-lg-12" style="border: 1px solid #707070"></div>
        </div>


        @if($errors->any())
            <div class="alert alert-danger">
                <ul class="list-unstyled">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
                        transition: 0.3s; padding: 20px;">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        @php
                            $imagePath = explode('.', !is_null($teacher->image) ? $teacher->image : 'do_not_delete.png');
                        @endphp
                        <img src="{{asset('images')."/". $imagePath[0].".".$imagePath[1]}}"
                             class="img-fluid" alt="No Image" style="width: 10%;height: 10%; object-fit: contain;">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <h4><strong>Teacher Name:</strong></h4>
                        <div class="col-lg-6" style="display: flex; justify-content: center">
                            <p style="font-size: 18px;">{{ ucwords($teacher->name) }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <h4><strong>Class:</strong></h4>
                        <div class="col-lg-6" style="display: flex; justify-content: center">
                            <p style="font-size: 18px;">{{ ucwords($teacher->class->class_name) }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <h4><strong>Bio:</strong></h4>
                        <div class="col-lg-6">
                            <p style="font-size: 18px;">
                                {!! $teacher->bio !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h3>Courses</h3>
            </div>
        </div>

        <div class="row ruslt_ser" style="margin-top: 30px;">
            @if(count($courses) > 0)
                @foreach($courses as $course)

                    <div class="col-lg-4 col-md-4">
                        @php
                            $imagePath = explode('.', !is_null($course->course_image) ? $course->course_image : 'do_not_delete.png');
                        @endphp
                        <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
                        transition: 0.3s; padding: 10px;">
                            <div class="card-header" style="text-align: center;height:224px;" >
                                <img src="{{asset('images')."/". $imagePath[0].".".$imagePath[1]}}"
                                     class="img-fluid" alt="No Image"  style=" width: 100%;height: 100%; object-fit: contain;">
                            </div>
                            <div class="card-body" style="text-align: center">
                                <p style="margin-top: 15px; font-size: 16px; font-weight: bold;">
                                    <a href="{{url('student/course_detail/'.encrypt($course->id))}}" style="text-decoration: none; color: black">
                                        {{$course->course_name}}
                                    </a>
                                </p>
                            </div>
                            <div class="card-footer" style="text-align: center">
                                <div class="row" style="margin-top: 10px;">
                                    <div class="col-lg-12">
                                        <p style="color: #C9C97E; font-size: 12px;">{{ ucfirst($course->class->class_name) }} Class</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <h4 class="text_center">No course found...</h4>
            @endif
        </div>

        <div class="row" style="margin-top: 4%;">
            <div class="col-md-6">
                <div class="card card-desgn comment-scroll">
                    <div class="card-header">
                        <h3 style="margin-bottom: 6%; color: #C9C97E">Reviews</h3>
                    </div>
                    <div class="card-body">
                        @foreach($ratings as $rating)
                            @php
                                $imagePath = explode('.', !is_null($rating->user->image) ? $rating->user->image : 'do_not_delete.png');
                            @endphp
                            <div class="col-md-12" style="margin-bottom: 4%; border-top: 0.5px solid grey; padding-top: 10px;">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-3" style="padding-left: 0px;">
                                            <img src="{{asset('images')."/". $imagePath[0].".".$imagePath[1]}}"
                                                 class="img-fluid" alt="No Image"  style="border-radius: 50%; width: 35px">
                                        </div>
                                        <div class="col-md-9" style="padding-left: 0px;">
                                            <p style="padding-bottom: 0px; margin-bottom: 0px; padding-top: 10px;">
                                                <strong>{{ $rating->user->name }}</strong>
                                            </p>
                                        </div>
                                    </div>
                                @if($rating->stars == '1')
                                    <div class="col-md-12">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                @elseif($rating->stars == '2')
                                    <div class="col-md-12">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                @elseif($rating->stars == '3')
                                    <div class="col-md-12">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                @elseif($rating->stars == '4')
                                    <div class="col-md-12">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                @elseif($rating->stars == '5')
                                    <div class="col-md-12">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>
                                @endif
                                </div>

                                <div class="row">
                                    <div class="col-md-8">
                                        <p>{!! $rating->message !!}</p>
                                    </div>
                                    <div class="col-md-4" style="padding-top: 12px;">
                                        <p>{{ date('H:i:a', strtotime($rating->created_at)) }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        @php
           $user = (new \App\Models\Rating())->where('user_id', auth()->user()->id)->first();
            @endphp
        <div class="row">
            <div class="col-md-12">
                @if(!empty($user))
                    <button class="btn rating-btn" data-toggle="modal" data-target="#exampleModal"
                    onclick="edit(this)" data-teacher_id="{{ $teacher->id }}" disabled>
                        Rate your Teacher
                    </button>
                @else
                    <button class="btn rating-btn" data-toggle="modal" data-target="#exampleModal"
                            onclick="edit(this)" data-teacher_id="{{ $teacher->id }}">
                        Rate your Teacher
                    </button>
                @endif
            </div>
        </div>
    </div>

@include('student.rating')
@endsection

@section('JS')
    <script>
        function edit(el) {
            var link = $(el)
            var modal = $("#exampleModal")
            var teacher_id = link.data('teacher_id');

            modal.find('#teacher_id').val(teacher_id);
        }
    </script>
@endsection
