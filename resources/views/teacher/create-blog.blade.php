@extends('teacher.dashboard-layout')

@section('title', 'Create Blog')

@section('content')
    <div class="container-fluid" style="margin-bottom: 15%;">
        <div class="row" style="margin-bottom: 6%;">
            <div class="col-lg-8 pl_0 pr_0 text_center" style="padding-top: 30px;">
                <h3>DASHBOARD / <span style="color: #C9C97E">CREATE NEW BLOG</span></h3>
            </div>
        </div>

        <form action="#">
            <div class="row" style="margin-bottom: 3%;">
                <div class="col-lg-6 col-md-6">
                    <label for="">Blog Title</label>
                    <input type="text" name="blog_title" class="form-control">
                </div>
            </div>

            <div class="row" style="margin-bottom: 3%;">
                <div class="col-lg-12 col-md-12">
                    <label for="">Describe Blog</label>
                    <textarea name="describe_note"
                              placeholder="Tell the user/student the course is about"></textarea>
                    <p style="text-align: end">Max: 200 words</p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="col-12 text_center">
                        <h4><strong>Add Blog cover Image</strong></h4>
                    </div>
                </div>
            </div>

            <div class="row text_center" style="margin-bottom: 3%;">
                <div class="col-lg-12">
                    <div class="col-12">
                        <label for="course_cover" class="course-cover-plus">
                            <strong>+</strong></label>
                        <p>(format: JPG, PNG)</p>
                        <input type="file" name="course_cover" id="course_cover"
                               style="visibility:hidden;">
                    </div>
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

