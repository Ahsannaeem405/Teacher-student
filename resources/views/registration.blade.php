{{--@extends('user.layout.layouts')--}}
{{--@section('content')--}}

{{--    <div class="banner">--}}
{{--        <div class="banner_text text-center"></div>--}}
{{--    </div>--}}

{{--    <div class="container py-5">--}}
{{--        <div class="d-flex justify-content-center mb-3 ">--}}
{{--            <h2>Register Here</h2>--}}
{{--        </div>--}}

{{--        <div class="row justify-content-center">--}}
{{--            <div class="col-lg-3 col-md-3 mx-auto">--}}
{{--                <div class="card border-1 shadow">--}}
{{--                    <div class="card-body d-flex flex-column align-items-center">--}}
{{--                        <div class="mt-2">--}}
{{--                            <form action="{{ route('register') }}" method="POST">--}}
{{--                                @csrf--}}
{{--                                <div class="form-group mb-4">--}}
{{--                                    <label for="first_name" class="field_label fw-bolder">First Name:</label>--}}
{{--                                    <input type="text" class="form-control input-field-reg @error('name') is-invalid @enderror"--}}
{{--                                           name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus--}}
{{--                                           placeholder="Enter First Name" id="first_name" >--}}
{{--                                    @error('first_name')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}

{{--                                <div class="form-group mb-4">--}}
{{--                                    <label for="last_name" class="field_label fw-bolder">Last Name:</label>--}}
{{--                                    <input type="text" class="form-control input-field-reg @error('last_name') is-invalid @enderror"--}}
{{--                                           name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus--}}
{{--                                           placeholder="Enter Last Name" id="last_name" >--}}
{{--                                    @error('last_name')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}

{{--                                <div class="form-group mb-4">--}}
{{--                                    <label for="email" class="field_label fw-bolder">E-mail:</label>--}}
{{--                                    <input type="email" class="form-control input-field-reg @error('email') is-invalid @enderror"--}}
{{--                                           name="email" value="{{ old('email') }}" required autocomplete="email" autofocus--}}
{{--                                           placeholder="Enter Email" id="email" >--}}
{{--                                    @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}

{{--                                <div class="form-group mb-4">--}}
{{--                                    <label for="password" class="field_label fw-bolder">Password:</label>--}}
{{--                                    <input type="password" name="password" class="form-control input-field-reg--}}
{{--                                        @error('password') is-invalid @enderror" value="{{ old('password') }}"--}}
{{--                                           required autocomplete="password" autofocus id="password"--}}
{{--                                           placeholder="Enter Password">--}}
{{--                                    @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}

{{--                                <div class="form-group mb-4">--}}
{{--                                    <label for="confirm_password" class="field_label fw-bolder">Confirm Password:</label>--}}
{{--                                    <input type="password" name="confirm_password" class="form-control input-field-reg--}}
{{--                                           @error('confirm_password') is-invalid @enderror" value="{{ old('confirm_password') }}"--}}
{{--                                           required autocomplete="confirm_password" autofocus id="confirm_password"--}}
{{--                                           placeholder="Confirm Password">--}}
{{--                                    @error('confirm_password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}

{{--                                <div class="form-group mb-4">--}}
{{--                                    <label for="role" class="field_label fw-bolder">Role Type:</label>--}}
{{--                                    <select name="role" id="role"--}}
{{--                                      class="form-control input-field-reg @error('role') is-invalid @enderror"--}}
{{--                                            required autocomplete="role" autofocus>--}}
{{--                                        <option selected>Select Role</option>--}}
{{--                                        <option value="1">Admin</option>--}}
{{--                                        <option value="2">Teacher</option>--}}
{{--                                        <option value="3">Student</option>--}}
{{--                                    </select>--}}
{{--                                    @error('role')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}

{{--                                <div class="form-group mb-4 text-center">--}}
{{--                                    <span>Already Register?&nbsp;<a href="{{ url('/sign-in') }}" class="text-decoration-none">Login</a></span>--}}
{{--                                </div>--}}

{{--                                <div class="form-group mb-2 text-center">--}}
{{--                                    <button type="submit" class="btn"--}}
{{--                                            style="background-color: #b5b56f; color: white;">{{ __('Register') }}</button>--}}
{{--                                </div>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--@endsection--}}
