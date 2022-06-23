@extends('student.dashboard-layout')

@section('title', 'Create Notes')

@section('content')
    <div class="container-fluid" style="margin-bottom: 15%;">
        <div class="row">
            <div class="col-lg-12" style="padding-left: 80px; padding-top: 30px;">
                <h3>DASHBOARD / <span style="color: #C9C97E">CREATE NEW NOTES</span></h3>
            </div>
        </div>

        <div class="row" style="margin-top: 40px; padding-left: 70px;">
            <div class="col-lg-6">
                <label for="">Note Name</label>
                <input type="text" name="notes_name" class="form-control">
            </div>
        </div>

        <div class="row" style="margin-top: 40px; padding-left: 70px;">
            <div class="col-lg-12">
                <label for="">Describe Note</label>
                <textarea id="describe_notes" name="describe_notes"></textarea>
                <p style="text-align: end">Max: 200 words</p>
            </div>
        </div>

        <div class="row" style="display: flex; justify-content: center; margin-top: 20px;">
            <div class="col-lg-6">
                <div class="profile-input-field">
                    <button type="submit" class="profile-save-btn">Create</button>&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="#" class="profile-draft-btn">Cancel</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('JS')
    @include('student.layouts.footer')

    <script>
        ClassicEditor
            .create( document.querySelector( '#describe_notes' ) )
            .then( editor => {
                console.log( editor );
            } )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection