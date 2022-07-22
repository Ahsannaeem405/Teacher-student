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
                        <div style="height: 120px;">
                        <img src="{{ asset('images')."/". $imagePath}}" class="img-fluid" alt="No Image"  style=" width: 100%;height: 100%; object-fit: contain;">
                    </div>

                        <span>{{ strlen($class->class_title) > 15 ? substr($class->class_title,0,15)."..." : $class->class_title }}</span>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="row" style="margin-top: 30px;">
            <div class=" col-md-9 heading-1 float-text">
                <h2 class="bottom-line"> Class session videos / documents</h2>
                <a href="{{ route('zip-file', ['name' => encrypt($course->course_name),'live' => "no", 'course_id' => encrypt($course->id)]) }}" class="span-class">
                    <i class="fa fa-download" aria-hidden="true"></i>Download</a>
            </div>
            <div class="col-md-3">

                    <label for="" data-toggle="modal" data-target="#exampleModal" style="padding-top: 25px; color: #C8C97D; font-size: 25px;">
                        <i class="fa fa-plus-circle"></i>
                    </label>

            </div>
        </div>

        <div class="row" style="margin-top: 20px;">
          @foreach($lectures as $lecture)
            @if($lecture->course_type ==null )
                @php
                    $filename = $lecture->course_doc;
                    $ext = pathinfo($filename, PATHINFO_EXTENSION);
                    $vid = ['mp4', 'webm', 'ogg', 'mkv', '3gp'];
                @endphp
                <div class="col-md-3">
                    @if(in_array($ext, $vid))
                        <video width="200" height="140" controls>
                            <source src='{{asset("/videos/".$course->course_name.auth()->user()->id.'/'.$lecture->course_doc)}}' type="video/mp4">
                        </video>
                    @else
                        <div style="padding-top: 6px;">
                            <div class="course_doc_img">
                                <i class="fa-solid fa-file-lines" style="color: #C8C97D"></i>
                            </div>
                        </div>
                    @endif
                    <p><strong>{{ $lecture->class_title }}</strong></p>
                    <a href="{{asset("/videos/".$course->course_name.auth()->user()->id.'/'.$lecture->course_doc)}}" download class="btn btn-info">Download</a>&nbsp;&nbsp;

                    <a href="#" style="padding-top: 5px;" data-toggle="modal" data-target="#editVidModal"
                       onclick="edit(this)" data-class_title="{{ $lecture->class_title }}"
                       data-lecture_id="{{ $lecture->id }}" data-course_name="{{ $course->course_name }}">
                        <i class="fas fa-edit" style="color: #C9C97E; font-size: 22px"></i>
                    </a>&nbsp;&nbsp;

                    <button class="userDeleteclass" style="padding-top: 5px; border: none; background: white;"
                            userId="{{$lecture->id}}">
                        <i class="fas fa-trash" style="color: red; font-size: 22px"></i>
                    </button>
                </div>
            @endif
          @endforeach
        </div>
        <div class="row" style="margin-top: 30px;">
            <div class=" col-md-9 heading-1 float-text">
                <h2 class="bottom-line"> Live  videos </h2>
                <a href="{{ route('zip-file', ['name' => encrypt($course->course_name),'live' => "yes"]) }}" class="span-class">
                    <i class="fa fa-download" aria-hidden="true"></i>Download</a>
            </div>
            <div class="col-md-3">

                    <label for="" data-toggle="modal" data-target="#exampleModal2" style="padding-top: 25px; color: #C8C97D; font-size: 25px;">
                        <i class="fa fa-plus-circle"></i>
                    </label>

            </div>
        </div>


        <div class="row" style="margin-top: 20px;">
          @foreach($lectures as $lecture)
          @if($lecture->course_type =="live" )
            <div class="col-md-3">
                <video width="200" height="140" controls>
                    <source src='{{asset("/videos/".$course->course_name.auth()->user()->id.'/'.$lecture->course_doc)}}' type="video/mp4">
                </video>
                <p><strong>{{ $lecture->class_title }}</strong></p>
                <a href="{{asset("/videos/".$course->course_name.auth()->user()->id.'/'.$lecture->course_doc)}}" download class="btn btn-info">Download</a>&nbsp;&nbsp;

                <a href="#" style="padding-top: 5px;" data-toggle="modal" data-target="#editVidModal"
                   onclick="edit(this)" data-class_title="{{ $lecture->class_title }}"
                   data-lecture_id="{{ $lecture->id }}" data-course_name="{{ $course->course_name }}">
                    <i class="fas fa-edit" style="color: #C9C97E; font-size: 22px"></i>
                </a>&nbsp;&nbsp;

                <button class="userDeleteclass" style="padding-top: 5px; border: none; background: white;"
                        userId="{{$lecture->id}}">
                    <i class="fas fa-trash" style="color: red; font-size: 22px"></i>
                </button>
            </div>
          @endif
          @endforeach
        </div>

    </div>

    @include('teacher.vid-upload-modal')

    @include('teacher.edit-course-vid')
@endsection

@section('JS')
    <script>
        $("#course_vid").change(function(){
            $("#file-name").text(this.files[0].name);
        });

        function edit(el) {
            var link = $(el)
            var modal = $("#editVidModal")
            var lecture_id = link.data('lecture_id');
            var class_title = link.data('class_title');
            var course_name = link.data('course_name');

            modal.find('#lecture_id').val(lecture_id);
            modal.find('#class_title').val(class_title);
            modal.find('#course_name').val(course_name);
        }

        $('.userDeleteclass').click(function(e) {
            e.preventDefault();
            var lec_id = $(this).attr('userId');
            // alert(user_id);
            swal({
                title: "Are you sure?",
                text: "Do you want to delete this note?",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
                .then((willDelete) => {
                    if (willDelete) {
                        $.ajax({
                            url: '{{ route('teacher.lec-delete') }}',
                            type: 'get',
                            data: {
                                'lec_id': lec_id
                            },
                            success: function(result) {
                                swal(result.success, {
                                    icon: "success",
                                })
                                    .then((result) => {
                                        location.reload();
                                    });
                                // window.reload();
                            }
                        });
                        // admin/deleteuser
                    }
                });
        });
    </script>
@endsection
