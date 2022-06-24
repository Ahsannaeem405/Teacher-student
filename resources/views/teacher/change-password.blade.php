@extends('teacher.dashboard-layout')

@section('title', 'Upload Profile Photo')

@section('content')
    <div class="container-fluid" >
        <div class="row">
            <div class="col-lg-8" style="padding-top: 30px;">
                <h3>CHANGE PASSWORD</h3>
            </div>
        </div>

        <div class="row status" style="margin-bottom: 4%">
            <div class="col-lg-12" style="border: 1px solid #707070"></div>
        </div>

        <div class="row">
            <div class="col-lg-10 col-md-10">
                <div class="row" style="margin-bottom: 3%">
                    <div class="col-lg-6 col-md-6">
                        <label for="">Current Password</label>
                        <input type="password" name="current_password" class="form-control">
                    </div>
                </div>

                <div class="row" style="margin-bottom: 3%">
                    <div class="col-lg-6 col-md-6">
                        <label for="">New Password</label>
                        <input type="password" name="new_password" class="form-control">
                    </div>
                </div>

                <div class="row" style="margin-bottom: 6%">
                    <div class="col-lg-6 col-md-6">
                        <label for="">Confirm New Password</label>
                        <input type="password" name="confirm_new_password" class="form-control">
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="profile-input-field">
                            <button type="submit" class="profile-save-btn">Save</button>&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="#" class="profile-draft-btn">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-2" style="padding-right: 0px; padding-top: 25px;">
                <div class="col-lg-12" style="text-align: end;">
                    <img src="{{ asset('images/dt1.png') }}" alt="no image" width="30">
                </div>
            </div>
        </div>
    </div>
@endsection

@section('JS')
    @include('teacher.layouts.footer')
@endsection
