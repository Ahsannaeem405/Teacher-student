@extends('teacher.dashboard-layout')

@section('title', 'Edit Blog')

@section('content')
    <div class="container-fluid" style="margin-bottom: 15%;">
        <div class="row" style="margin-bottom: 6%;">
            <div class="col-lg-8 pl_0 pr_0 text_center" style="padding-top: 30px;">
                <h3>DASHBOARD / <span style="color: #C9C97E">EDIT BLOG</span></h3>
            </div>
        </div>

        <form action="{{ route('teacher.blog.update', ['blog' => encrypt($blogs->id)]) }}" method="POST" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="row" style="margin-bottom: 3%;">
                <div class="col-lg-6 col-md-6">
                    <label for="">Blog Title</label>
                    <input type="text" name="blog_title" value="{{ $blogs->blog_title }}" class="form-control" required>
                </div>
            </div>

            <div class="row" style="margin-bottom: 3%;">
                <div class="col-lg-12 col-md-12">
                    <label for="">Describe Blog</label>
                    <textarea name="blog_description"
                              placeholder="Tell the user/student the course is about">{{ $blogs->blog_description }}</textarea>
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
                        <label for="file-upload" class="course-cover-plus">
                            <strong>+</strong></label>
                        <input type="file" name="blog_cover"
                               class="@error('blog_cover') is-invalid @enderror"
                               autocomplete="blog_cover" autofocus accept="image/jpeg, .png"
                               id="file-upload" style="visibility:hidden; display: none">
                        @error('blog_cover')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                        <label id="file-name"></label>
                        <p>(format: JPG, PNG)</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="" style="text-align: center">
                        <button type="submit" class="profile-save-btn">Update</button>&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="#" class="profile-draft-btn">Cancel</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('JS')
    <script>
        $("#file-upload").change(function(){
            $("#file-name").text(this.files[0].name);
        });
    </script>
@endsection
