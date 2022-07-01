@extends('teacher.dashboard-layout')

@section('title', 'My Profile')

@section('content')
    <div class="container-fluid" >
        <div class="row" style="margin-bottom: 2%;">
            <div class="col-lg-8 pr_0 pl_0 text_center" style="padding-top: 30px;">
                <h3>DASHBOARD / <span style="color: #C9C97E">MY PROFILE</span></h3>
            </div>
        </div>


        <form action="#">
            <div class="row profile-input-field">
                <div class="col-lg-6" >
                    <label for="">First Name</label>
                    <input type="text" class="form-control" name="first_name">
                </div>
            </div>

            <div class="row profile-input-field">
                <div class="col-lg-6" >
                    <label for="">Last Name</label>
                    <input type="text" class="form-control" name="last_name">
                </div>
            </div>

            <div class="row profile-input-field">
                <div class="col-lg-6" >
                    <label for="">Email</label>
                    <input type="email" class="form-control" name="email">
                </div>
            </div>

            <div class="row profile-input-field">
                <div class="col-lg-6" >
                    <label for="">Subject</label>
                    <select class="form-control" name="role">
                        <option selected>Select</option>
                        <option value="2">Technology</option>
                        <option value="3">Entertainment</option>
                        <option value="3">Politics</option>
                        <option value="3">Psychology</option>
                    </select>
                </div>
            </div>

            <div class="row profile-input-field">
                <div class="col-lg-12">
                    <label for="">Bio</label>
                    <textarea name="bio" id="editor"></textarea>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12" style="text-align: end">
                    <p>Max: 500 words</p>
                </div>
            </div>

            <div class="profile-input-field">
                <button type="submit" class="profile-save-btn">Save</button>&nbsp;&nbsp;&nbsp;&nbsp;
            </div>
        </form>
    </div>
@endsection

@section('JS')
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
