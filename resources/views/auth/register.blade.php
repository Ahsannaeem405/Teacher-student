@extends('user.layout')
@section('content')

    <div class="banner">
        <div class="banner_text text-center"></div>
    </div>

    <div class="container py-5">


        <div class="row col-centered dis_flex">
            <div class=" ">
                <div class="card border-1 shadow reg_font">
                    {{--                <div class="card-header">{{ __('Register') }}</div>--}}
                    <div class="d-flex justify-content-center mb-3 text-center">
                        <h2>{{ __('Register') }}</h2>
                    </div>
                    <div class="card-body d-flex flex-column align-items-center">
                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="form-group mb-4">
                                <label for="first_name" class="field_label fw-bolder">Name:</label>
                                <input type="text"
                                       class="form-control input-field-reg @error('name') is-invalid @enderror"
                                       name="name" value="{{ old('name') }}" required
                                       autocomplete="name" autofocus
                                       placeholder="Enter Name" id="name">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group mb-4">
                                <label for="email" class="field_label fw-bolder">E-mail:</label>
                                <input type="email"
                                       class="form-control input-field-reg @error('email') is-invalid @enderror"
                                       name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                       placeholder="Enter Email" id="email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group mb-4">
                                <label for="password" class="field_label fw-bolder">Password:</label>
                                <input type="password" name="password" class="form-control input-field-reg
                                        @error('password') is-invalid @enderror" value="{{ old('password') }}"
                                       required autocomplete="password" autofocus id="password"
                                       placeholder="Enter Password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group mb-4">
                                <label for="confirm_password" class="field_label fw-bolder">Confirm Password:</label>
                                <input type="password" name="confirm_password" class="form-control input-field-reg
                                           @error('confirm_password') is-invalid @enderror"
                                       value="{{ old('confirm_password') }}"
                                       required autocomplete="confirm_password" autofocus id="confirm_password"
                                       placeholder="Confirm Password">
                                @error('confirm_password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group mb-4">
                                <label for="role" class="field_label fw-bolder">Role Type:</label>
                                <select name="role" id="role"
                                        class="form-control input-field-reg @error('role') is-invalid @enderror"
                                        autocomplete="role" autofocus required>
                                    <option value="">Select Role</option>
                                    <option value="2">Teacher</option>
                                    <option value="3">Student</option>
                                </select>
                                @error('role')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group mb-4 text-center">
                                <span>Already Register?&nbsp;<a href="{{ url('/login') }}"
                                                                class="text-decoration-none">Login</a></span>
                            </div>

                            <div class="form-group mb-2 text-center">
                                <button type="submit" class="btn"
                                        style="background-color: #b5b56f; color: white;">{{ __('Register') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
