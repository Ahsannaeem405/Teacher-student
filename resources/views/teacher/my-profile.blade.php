@extends('teacher.dashboard-layout')

@section('title', 'My Profile')

@section('content')
    <div class="container-fluid" >
        <div class="row">
            <div class="col-lg-6" style="padding-left: 80px;">
                <h3>MY PROFILE</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 profile-upload-photo">
                <h4>Upload photo</h4>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 profile-image">
                <img src="{{ asset('images/teacher-chat.png') }}" alt="no image" width="60">
                <span style="font-size: 26px;">...</span>
            </div>

            <div class="col-lg-6" style="text-align: end;">
                <img src="{{ asset('images/dt1.png') }}" alt="no image" width="30">
            </div>
        </div>

        <div class="row profile-image-bottom-line" style="">
            <div class="col-lg-11" style="border: 1px solid #707070"></div>
        </div>

        <div class="row profile-input-field">
            <div class="col-lg-6" >
                <label for="">Name</label>
                <input type="text" class="form-control" name="name">
            </div>
        </div>

        <div class="row profile-input-field">
            <div class="col-lg-6">
                <label for="">Bio</label>
                <textarea name="bio" id="editor"></textarea>
            </div>
        </div>

        <div class="row profile-input-field">
            <div class="col-lg-6" >
                <label for="">E-mail</label>
                <input type="email" class="form-control" name="email">
            </div>
        </div>

        <div class="row profile-input-field">
            <div class="col-lg-6" >
                <label for="">Teacher or Student</label>
                <select class="form-control" name="role">
                    <option selected>Select</option>
                    <option value="2">Teacher</option>
                    <option value="3">Student</option>
                </select>
            </div>
        </div>

        <div class="row profile-input-field">
            <div class="col-lg-6" >
                <label for="">LinkedIn Profile</label>
                <input type="text" class="form-control" name="linkedIn_prof">
            </div>
        </div>

        <div class="profile-input-field">
            <button type="submit" class="profile-save-btn">Save</button>&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="#" class="profile-draft-btn">Draft</a>
        </div>

        <div class="prof-delete-acc">
            <a href="#" class="prof-delete-acc-text">Delete your account</a>
        </div>
    </div>
@endsection

@section('JS')
    @include('teacher.layouts.footer')

    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .then( editor => {
                console.log( editor );
            } )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection
