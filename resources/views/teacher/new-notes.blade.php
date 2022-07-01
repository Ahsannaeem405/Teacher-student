@extends('teacher.dashboard-layout')

@section('title', 'Create Notes')

@section('content')
    <div class="container-fluid" style="margin-bottom: 15%;">
        <div class="row" style="margin-bottom: 6%;">
            <div class="col-lg-8" style="padding-top: 30px;">
                <h3>DASHBOARD / <span style="color: #C9C97E">CREATE NEW NOTE</span></h3>
            </div>
        </div>

        <form action="{{ route('teacher.store-notes') }}" method="post">
            @csrf
            <div class="row" style="margin-bottom: 3%;">
                <div class="col-lg-6 col-md-6">
                    <label for="">Note Name</label>
                    <input type="text" name="note_name" class="form-control">
                </div>
            </div>

            <div class="row" style="margin-bottom: 3%;">
                <div class="col-lg-12 col-md-12">
                    <label for="">Describe Note</label>
                    <textarea name="describe_note"
                              placeholder="Tell the user/student the course is about"></textarea>
                    <p style="text-align: end">Max: 200 words</p>
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

