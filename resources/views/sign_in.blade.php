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

<div class="banner">
    <div class="banner_text text-center"></div>
</div>

<section style="margin-top: 15px;" class="cardbgcolor">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="" style="margin-top: 128%;margin-left: -28%;">
                    <img src="{{url('/images/dot-shape-primary.svg')}}" alt="Image"/>
                </div>
             </div>

            <div class="col-md-4">
                <h2 class="text-center" >
                    Log in </h2>

                <form action="#" method="POST">
                    <div class="form-group mb-4">
                        <label for="email" class="field_label fw-bolder">E-mail:</label>
                        <input type="email" class="form-control input-field-reg @error('email') is-invalid @enderror"
                               name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                               placeholder="Enter Email" id="email" >
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

                    <div class="text-center forg_m" >
                        <a href="#" style="color:black;font-size: 27px;">Forget Password?</a><br>
                        <button type="submit" class="btn btn-default sub_btn" >Sign in</button>
                    </div>
                </form>
            </div>

            <div class="col-md-4">
                <div class="right_dot" >
                    <img src="{{url('/images/dot-shape-primary.svg')}}" alt="Image"/>
                </div>
            </div>
        </div>

        <div class="row trail_space " >
            <div class="col-md-5 col-centered ">
                Sign Up for a free 7-day trail
            </div>
        </div>
    </div>
</section>


<div class="next-project ">
    <div class="two-img">
        <img src="{{url('/images/dot-shape-primary.svg')}}" alt="Image"/>
        <img src="{{url('/images/dot-shape-white.svg')}}" alt="Image"/>
    </div>
    <div class="container">
        <h1>Have A Vision For Your</h1>
        <h1>Next Project? Let's Get Your</h1>
        <h1>14 Day Trial Started Now!</h1>
        <div class="btn-sec mt-5">
            <button>Learn More <img src="{{url('/images/arrow.png')}}" alt="Image"/></button>
            <button>Join With Us!</button>
        </div>
    </div>
    <div class="one-img">
        <img src="{{url('/images/dot-shape-white.svg')}}" alt="Image"/>
    </div>
</div>





@endsection
