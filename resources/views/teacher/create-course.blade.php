@extends('teacher.dashboard-layout')

@section('title', 'Create Course')

@section('content')
    <div class="container-fluid" style="margin-bottom: 15%;">
        <div class="row">
            <div class="col-lg-6" style="padding-top: 30px;">
                <h3>DASHBOARD</h3>
            </div>

            <div class="col-lg-6" style="padding-top: 50px;">
                <button type="submit" class="search-btn" style="cursor: unset">
                    <img src="{{ asset('images/search-icon.png') }}" alt="no image" width="20">
                </button>

                <input type="text" class="search-input" placeholder="python coding" name="search">
            </div>
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
                <div class="col-12">
                    <h4><strong>Add Course Cover Image</strong></h4>
                </div>
            </div>
        </div>

        <form action="{{ route('teacher.createCourse.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-12">
                        <label for="file-upload" class="course-cover-plus">
                            <strong>+</strong></label>
                        <label id="file-name"></label>
                        <p>(format: JPG, PNG)</p>
                        <input type="file" name="course_cover"
                               class="@error('course_cover') is-invalid @enderror"
                               autocomplete="course_cover" autofocus
                               id="file-upload" style="visibility:hidden;">
                        @error('course_cover')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row" style="margin-bottom: 4%;">
                <div class="col-lg-6">
                    <h4><strong>Course Name</strong></h4>
                    <input type="text" name="course_name" class="form-control">
                </div>
            </div>

            <div class="row" style="margin-bottom: 4%;">
                <div class="col-lg-12">
                    <h4><strong>Add course date and time stamp</strong></h4>
                    <div class="col-lg-4" style="padding-top: 24px;">
                        <button type="submit" class="course-search-btn" style="cursor: unset">
                        </button>

                        <input type="text" class="search-input" placeholder="DD-MM-YY" name="course_date">
                    </div>

                    <div class="col-lg-8">
                        <div>
                            <label for="">Time</label>
                        </div>
                        <button type="submit" class="course-time-btn" style="cursor: unset">
                            <i class="fa-solid fa-clock"></i>
                        </button>

                        <input type="text" class="search-input" placeholder="01-30 PM" name="course_time">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <h4><strong>Upload Course session videos/documents</strong></h4>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="col-lg-2">
                        <label for="course_cover" class="course-cover-plus">
                            <strong>+</strong></label>
                        <input type="file" name="course_cover" id="course_cover"
                               style="visibility:hidden;">
                    </div>

                    <div class="col-lg-2">
                        <label for="course_cover" class="course-cover-plus">
                            <strong>+</strong></label>
                        <input type="file" name="course_cover" id="course_cover"
                               style="visibility:hidden;">
                    </div>

                    <div class="col-lg-2">
                        <label for="course_cover" class="course-cover-plus">
                            <strong>+</strong></label>
                        <input type="file" name="course_cover" id="course_cover"
                               style="visibility:hidden;">
                    </div>

                    <div class="col-lg-2">
                        <label for="course_cover" class="course-cover-plus">
                            <strong>+</strong></label>
                        <input type="file" name="course_cover" id="course_cover"
                               style="visibility:hidden;">
                    </div>
                </div>
            </div>

            <div class="row" style="margin-bottom: 4%;">
                <div class="col-lg-4">
                    <p>(format: JPG, PNG)</p>
                </div>
            </div>

            <div class="row" style="margin-bottom: 4%;">
                <div class="col-lg-12">
                    <h4><strong>Class Name</strong></h4>
                    <div class="col-lg-4">
                        <select class="form-control" name="class_name">
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
                        <div class="col-lg-6">
                            <div class="col-lg-1">
                                <a href="{{ route('teacher.create-class') }}"
                                   style="background-color: #C9C97E; color: black; border-radius: 3px;
                         padding-top: 5px; padding-bottom: 5px; text-decoration: none;
                         padding-left: 10px; padding-right: 10px; border: none">+</a>
                            </div>

                            <div class="col-lg-10">
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
                        <button type="submit" class="profile-save-btn">Save</button>&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="#" class="profile-draft-btn">Draft</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('JS')
    @include('teacher.layouts.footer')

    <script>
            $("#file-upload").change(function(){
                $("#file-name").text(this.files[0].name);
            });
    </script>

@endsection
