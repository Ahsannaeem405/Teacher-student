@extends('teacher.dashboard-layout')

@section('title', 'Create Course')

@section('content')
    <div class="container-fluid" style="margin-bottom: 15%;">
        <div class="row">
            <div class="col-lg-12 pl_0 text_center" style="padding-top: 30px;">
                <h3>DASHBOARD / <span style="color: #C9C97E">CREATE NEW COURSE</span></h3>
            </div>

{{--            <div class="col-lg-6 text_center" style="padding-top: 50px;">--}}
{{--                <button type="submit" class="search-btn" style="cursor: unset">--}}
{{--                    <img src="{{ asset('images/search-icon.png') }}" alt="no image" width="20">--}}
{{--                </button>--}}

{{--                <input type="text" class="search-input" placeholder="python coding" name="search">--}}
{{--            </div>--}}
        </div>

        <div class="row" style="margin-top: 30px; display: flex; justify-content: center;">
            <div class="col-lg-3" style="padding: 0px; margin: 0px; font-size: 22px;">
                <p><strong>Create own course</strong></p>
            </div>
        </div>

        <div class="row dashboard-searchbar-bottom-line">
            <div class="col-lg-12" style="border: 1px solid #707070"></div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="col-12 text_center">
                    <h4><strong>Add Course Cover Image</strong></h4>
                </div>
            </div>
        </div>

        <form action="{{ route('teacher.createCourse.store') }}" method="POST" id="my_form" enctype="multipart/form-data">
            @csrf

            <input type="hidden" id="class_id" name="class_name">
            <input type="hidden" id="description" name="description_course">
            <div class="row">
                    <div class="col-lg-12 text_center">
                        <label for="file-upload" class="course-cover-plus">
                            <strong>+</strong></label>
                        <input type="file" name="course_cover"
                               class="@error('course_cover') is-invalid @enderror"
                               autocomplete="course_cover" autofocus accept="image/jpeg, .png"
                               id="file-upload" style="visibility:hidden; display: none">
                        @error('course_cover')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                        <label id="file-name"></label>
                        <p>(format: JPG, PNG)</p>
                    </div>

            </div>

            <div class="row" style="margin-bottom: 4%;">
                <div class="col-lg-6">
                    <h4><strong>Course Name</strong></h4>
                    <input type="text" name="course_name" required class="form-control
                    @error('course_price') is-invalid @enderror" value="{{ old('course_name') }}">

                    @error('course_name')
                    <span class="invalid feedback alert-danger" role="alert">
                                <strong>{{ $message }}.</strong>
                            </span>
                    @enderror
                </div>
            </div>

            <div class="row" style="margin-bottom: 4%;">
                <div class="col-lg-6">
                    <h4><strong>Course Price</strong></h4>
                    <input type="number" name="course_price" class="form-control
                    @error('course_price') is-invalid @enderror" value="{{ old('course_price') }}"
                           oninput="this.value = this.value.replace(/[^0-9.]/g, '');
                           this.value = this.value.replace(/(\..*)\./g, '$1');" required>
                    @error('course_price')
                    <span class="invalid feedback alert-danger" role="alert">
                                <strong>{{ $message }}.</strong>
                            </span>
                    @enderror
                </div>
            </div>

{{--            <div class="row" style="margin-bottom: 4%;">--}}
{{--                <div class="col-lg-12">--}}
{{--                    <h4 class="text_center" ><strong>Add course date and time stamp</strong></h4>--}}
{{--                    <div class="col-lg-4 text_center" style="padding-top: 24px;">--}}
{{--                        <button type="submit" class="course-search-btn" style="cursor: unset">--}}
{{--                        </button>--}}

{{--                        <input type="date" class="search-input"--}}
{{--                               pattern="\d{4}-\d{2}-\d{2}" name="course_date">--}}
{{--                    </div>--}}

{{--                    <div class="col-lg-8 text_center">--}}
{{--                        <div>--}}
{{--                            <label for="">Time</label>--}}
{{--                        </div>--}}
{{--                        <button type="submit" class="course-time-btn" style="cursor: unset">--}}
{{--                            <i class="fa-solid fa-clock"></i>--}}
{{--                        </button>--}}

{{--                        <input type="time" class="search-input"--}}
{{--                               name="course_time">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

            <div class="row">
                <div class="col-lg-12 text_center">
                    <h4><strong>Upload Course session videos/documents</strong></h4>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 text_center">
                    <div class="">
                        <form action="{{ route('teacher.vids-upload') }}" method="post"
                         enctype="multipart/form-data" class="dropzone" id='vid_0'>
                            @csrf
                        </form>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-5">
                        <form action="{{ route('teacher.vids-upload') }}" method="post"
                              enctype="multipart/form-data" class="dropzone" id='vid_1'>
                        </form>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-5">
                        <form action="{{ route('teacher.vids-upload') }}" method="post"
                              enctype="multipart/form-data" class="dropzone" id='vid_2'>
                        </form>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-5 ">
                        <form action="{{ route('teacher.vids-upload') }}" method="post"
                              enctype="multipart/form-data" class="dropzone" id='vid_3'>
                        </form>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-5 ">
                        <form action="{{ route('teacher.vids-upload') }}" method="post"
                              enctype="multipart/form-data" class="dropzone" id='vid_4'>
                        </form>
                    </div>
                </div>
            </div>

{{--            <div class="row" style="margin-bottom: 4%;">--}}
{{--                <div class="col-lg-4 text_center">--}}
{{--                    <p>(format: MP4, MPEG-4, WebM, Ogg)</p>--}}
{{--                </div>--}}
{{--            </div>--}}

            <div class="row" style="margin-bottom: 4%;">
                <div class="col-lg-12">
                    <h4><strong>Class Title</strong></h4>
                    <div class="col-lg-4">
                        <select class="form-control" name="class_name" id="class_name" required>
                            <option value="" selected>Choose your own class</option>
                            @foreach($classes as $class)
                                <option value="{{ $class->id }}">{{ ucfirst($class->class_name) }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-lg-7">
                        <div class="col-lg-4">
                            <p>No matching subject?</p>
                        </div>
                        <div class="col-lg-6 create_new_btn">
                            <div class="col-lg-1 pl_0 pr_0">
                                <a href="{{ route('teacher.create-class') }}"
                                   style="background-color: #C9C97E; color: black; border-radius: 3px;
                                    padding-top: 5px; padding-bottom: 5px; text-decoration: none;
                                    padding-left: 10px; padding-right: 10px; border: none">+</a>
                            </div>

                            <div class="col-lg-10 pl_0 pr_0">
                                <p style="padding-left: 6px;">Create New</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <h4><strong>Describe course</strong></h4>
                </div>
            </div>


            <div class="row">
                <div class="col-lg-12">
                <textarea name="description_course" id="description_course"
                          placeholder="Tell the user /student the course is about...."></textarea>
                </div>
            </div>

            <div class="row" style="margin-bottom: 4%;">
                <div class="col-lg-12" style="text-align: right">
                    <p>Max: 3000 words</p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="" style="text-align: center">
                        <button type="submit" id="form_sub" class="profile-save-btn">Save</button>&nbsp;&nbsp;&nbsp;&nbsp;
{{--                        <a href="#" class="profile-draft-btn">Draft</a>--}}
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('JS')
    <script>

        // $(document).ready(function(){
        //
        //
        //
        // });

        $("#file-upload").change(function(){
            $("#file-name").text(this.files[0].name);
        });

        $("#vid_1").change(function(){
            $("#name_1").text(this.files[0].name);
        });
        $("#vid_2").change(function(){
            $("#name_2").text(this.files[0].name);
        });
        $("#vid_3").change(function(){
            $("#name_3").text(this.files[0].name);
        });
        $("#vid_4").change(function(){
            $("#name_4").text(this.files[0].name);
        });

        $('#class_name').on('change', function (){
            var classs = $('#class_name').val();
            $('#class_id').val(classs);
            console.log(classs);
        });


        var myDropzoneTheFirst = new Dropzone(
            '#vid_1', {
                maxFilesize:1,
                // acceptedFiles: ".jpeg,.jpg,.png,.gif",
                success: function(file, response)
                {
                    console.log(response);
                },
                error: function(file, response)
                {
                    return false;
                }
            }
        );

        var myDropzoneTheSecond = new Dropzone(
            '#vid_2', {
                maxFilesize:1,
                // acceptedFiles: ".jpeg,.jpg,.png,.gif",
                success: function(file, response)
                {
                    console.log(response);
                },
                error: function(file, response)
                {
                    return false;
                }
            }
        );

        var myDropzoneTheThird = new Dropzone(
            '#vid_3', {
                maxFilesize:1,
                // acceptedFiles: ".jpeg,.jpg,.png,.gif",
                success: function(file, response)
                {
                    console.log(response);
                },
                error: function(file, response)
                {
                    return false;
                }
            }
        );

        var myDropzoneTheFour = new Dropzone(
            '#vid_4', {
                maxFilesize:1,
                // acceptedFiles: ".jpeg,.jpg,.png,.gif",
                success: function(file, response)
                {
                    console.log(response);
                },
                error: function(file, response)
                {
                    return false;
                }
            }
        );

        $("#form_sub").click(function(){
            var description = tinymce.get("description_course").getContent();
            $('#description').val(description);
            $('#my_form').submit();
            //alert(description);
            console.log(description);
        });



    </script>
@endsection
