@extends('teacher.dashboard-layout')

@section('title', 'Edit Notes')

@section('content')
    <div class="container-fluid" style="margin-bottom: 15%;">
        <div class="row">
            <div class="col-lg-12" style="padding-left: 80px; padding-top: 30px;">
                <h3>DASHBOARD / <span style="color: #C9C97E">Update Note</span></h3>
            </div>
        </div>

    <form action="{{ route('teacher.update-note', ['id' => encrypt($note->id)]) }}" method="post">
    @csrf
        <div class="row" style="margin-top: 40px; padding-left: 70px;">
            <div class="col-lg-6">
                <label for="">Note Name</label>
                <input type="text" name="notes_name" class="form-control" value="{{$note->title}}">
            </div>
        </div>

        <div class="row" style="margin-top: 40px; padding-left: 70px;">
            <div class="col-lg-12">
                <label for="">Describe Note</label>
                <textarea id="describe_notes" name="describe_notes">{{$note->note_description}}</textarea>
                <p style="text-align: end">Max: 200 words</p>
            </div>
        </div>

        <div class="row" style="display: flex; justify-content: center; margin-top: 20px;">
            <div class="col-lg-6">
                <div class="profile-input-field">
                    <button type="submit" class="profile-save-btn">Update</button>&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="{{ route('teacher.t-notes') }}" class="profile-draft-btn"
                    style="text-decoration: none; color: #C9C97E">Cancel</a>
                </div>
            </div>
        </div>
</form>
    </div>
@endsection


