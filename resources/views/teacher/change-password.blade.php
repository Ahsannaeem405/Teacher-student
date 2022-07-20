@extends('teacher.dashboard-layout')

@section('title', 'Change Password')

@section('content')
    <div class="container-fluid" >
        <div class="row">
            <div class="col-lg-12" style="padding-top: 30px; text-align: center">
                <h3>CHANGE PASSWORD</h3>
            </div>
        </div>

        <div class="row status" style="margin-bottom: 4%">
            <div class="col-lg-12" style="border: 1px solid #707070"></div>
        </div>

        <div class="row">
            <form action="{{ route('teacher.reset-password') }}" method="post">
                @csrf
                <div class="col-lg-10 col-md-10">
                    <div class="row" style="margin-bottom: 3%">
                        <div class="col-lg-6 col-md-6">
                            <label for="">Current Password</label>
                            <input type="password" name="current_password"
                             class="form-control @error('current_password') is-invalid @enderror"
                             required autocomplete="current_password" autofocus>

                            @error('current_password')
                                <p class="alert alert-danger"><strong>{{ $message }}</strong></p>
                            @enderror
                        </div>
                    </div>

                    <div class="row" style="margin-bottom: 3%">
                        <div class="col-lg-6 col-md-6">
                            <label for="">New Password</label>
                            <input type="password" name="password"
                             class="form-control @error('password') is-invalid @enderror"
                             required autocomplete="password" autofocus>

                            @error('password')
                                <p class="alert alert-danger"><strong>{{ $message }}</strong></p>
                            @enderror
                        </div>
                    </div>

                    <div class="row" style="margin-bottom: 6%">
                        <div class="col-lg-6 col-md-6">
                            <label for="">Confirm New Password</label>
                            <input type="password" name="password_confirmation"
                             class="form-control @error('password_confirmation') is-invalid @enderror"
                             required autocomplete="password_confirmation" autofocus>

                            @error('password_confirmation')
                                <p class="alert alert-danger"><strong>{{ $message }}</strong></p>
                            @enderror
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="profile-input-field">
                                <button type="submit" class="profile-save-btn">Reset</button>&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="#" class="profile-draft-btn">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <div class="col-lg-2 col-md-2" style="padding-right: 0px; padding-top: 25px;">
                <div class="col-lg-12" style="text-align: end;">
                    <img src="{{ asset('images/dt1.png') }}" alt="no image" width="30">
                </div>
            </div>
        </div>
    </div>
@endsection

