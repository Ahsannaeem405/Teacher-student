@extends('teacher.dashboard-layout')

@section('title', 'Create Class')

@section('content')
    <div class="container-fluid" style="margin-bottom: 15%;">
        <div class="row" style="margin-bottom: 6%;">
            <div class="col-lg-8" style="padding-top: 30px;">
                <h3>MY CLASS  / <span style="color: #C9C97E">CREATE NEW CLASS</span></h3>
            </div>
        </div>

        <form action="{{ route('teacher.createClass.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-12">
                        <h4><strong>Add Class Cover Image</strong></h4>
                    </div>
                </div>
            </div>

            <div class="row" style="margin-bottom: 3%;">
                <div class="col-lg-12">
                    <div class="col-12">
                        <div id="cover_img">
                            <label for="file-upload" class="course-cover-plus">
                                <strong>+</strong></label>
                            <label id="file-name"></label>
                            <p>(format: JPG, PNG)</p>
                            <input type="file" name="class_cover"
                              class="@error('class_cover') is-invalid @enderror"
                                   autocomplete="class_cover" autofocus
                                   id="file-upload" style="visibility:hidden;">
                            @error('class_cover')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" style="margin-bottom: 3%;">
                <div class="col-lg-6 col-md-6">
                    <label for="">Class Name</label>
                    <select name="class_name" class="form-control
                        @error('class_name') is-invalid @enderror" autocomplete="class_name"
                        autofocus required>
                        <option selected>Select class</option>
                        <option value="physics">Physics</option>
                        <option value="chemistry">Chemistry</option>
                        <option value="maths">Maths</option>
                        <option value="computer">Computer</option>
                    </select>
                    @error('class_name')
                        <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    {{--                    <input type="text" name="note_name" class="form-control">--}}
                </div>
            </div>

            <div class="col-lg-4">
                <div>
                    <label for="">Date</label>
                </div>
                <button type="submit" class="course-search-btn" style="cursor: unset">
                </button>

                <input type="text" class="search-input @error('class_date') is-invalid @enderror"
                       placeholder="DD-MM-YY" required autocomplete="class_date" autofocus
                       name="class_date">
                @error('class_date')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="col-lg-8" style="margin-bottom: 3%;">
                <div>
                    <label for="">Time</label>
                </div>
                <button type="submit" class="course-time-btn" style="cursor: unset">
                    <i class="fa-solid fa-clock"></i>
                </button>

                <input type="text" class="search-input @error('class_time') is-invalid @enderror"
                       placeholder="01:30 PM" required autocomplete="class_time" autofocus
                       name="class_time">
                @error('class_time')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="row" style="margin-bottom: 3%;">
                <div class="col-lg-6 col-md-6">
                    <label for="">Teacher Name</label>
                    <input type="text" class="form-control @error('teacher_name') is-invalid @enderror"
                           name="teacher_name" required autocomplete="teacher_name" autofocus
                           placeholder="Enter name">
                    @error('teacher_name')
                    <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row" style="margin-bottom: 3%;">
                <div class="col-lg-6 col-md-6">
                    <label for="">Class Title</label>
                    <input type="text" class="form-control @error('class_title') is-invalid @enderror"
                           name="class_title" required autocomplete="class_title" autofocus
                           placeholder="Enter class title">
                    @error('class_title')
                        <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row" style="margin-bottom: 3%;">
                <div class="col-lg-12 col-md-12">
                    <label for="">Class Describe</label>
                    <textarea name="class_description" class="@error('class_description') is-invalid @enderror"
                              autocomplete="class_description" autofocus
                              placeholder="Tell the user/student the course is about"></textarea>
                    <p style="text-align: end">Max: 200 words</p>
                    @error('class_description')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="" style="text-align: center">
                        <button type="submit" class="profile-save-btn">Create</button>&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="#" class="profile-draft-btn">Cancel</a>
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
