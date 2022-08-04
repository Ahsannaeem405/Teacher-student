@extends('user.layout')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/style4.css') }}">
    <style>
        .banner{
            position: relative;
        }
        .banner_text{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
        }
        .freeBtn{
            background: #C9C97E;
            border: 1px solid #707070;
            margin-top:10px;
            font-weight:bolder;
            width: 39% !important;
            font-size: 25px;
            color:black
        }
        .textbold{
            color: white;
            font-size:50px;
        }
        .card-img-top{
            width: 100%;
            height: 180px;
        }
        .border{
            /* border: 1px solid  rgb(165, 163, 163); */
            margin-top: 20px;
            /* border-radius: 5%; */
        }
        {{--  img{
        border-radius: 5% 5% 0% 0%;
    }  --}}
    .card-title{
            color: #C9C97E;
            font-size: 15px;
            font-weight: 500;
            margin-left: 20px;
        }
        .greyColor{
            color: rgb(165, 163, 163);font-size: 17px;
        }
        .card_section{
            /* margin-top:20px;
            margin-bottom:20px;
            text-align: center;
            border-radius: 20px; */



        }
        .card-text{
            font-size: 20px;
            font-weight: 900;
            margin-left: 20px;
        }
        .card-body{
            background: white;
        }
        .cardbgcolor{
            padding-bottom:8px
        }
        .select-sec{
            margin-top:10%;
        }
    </style>

    <div class="banner66">
        <div class="banner_text text-center"></div>
    </div>

    <section style="margin-top: 15px;" class="cardbgcolor">
        <div class="container" style="align-content: center; padding: 0;">
            <div class="row" style="margin: 0; padding: 0; display: flex; justify-content: center">
                <div class="col-md-8" style="padding: 0">
                    <div class="card" style="text-align   : center;
                    box-shadow   : 0px 2px 25px rgba(0, 0, 0, .25); padding-top  : 20px; padding-bottom: 30px;">
                        <div class="card-header">
                            <h2>{{ __('Reset Password') }}</h2>
                        </div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf

                                <div class="row mb-3">
                                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-0" style="margin: 0; margin-top: 4%; display: flex;
                                justify-content: center">
                                    <div class="col-md-6 offset-md-4" style="padding: 0">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Send Password Reset Link') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
