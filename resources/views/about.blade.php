
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

<div class="banner55">
            <div class="banner_text text-center">

            </div>
        </div>
        <section style="margin-top: 15px;" class="cardbgcolor">
<div class="container row_width">

<div class="row row_width">
<div class="col-md-12 padding_4_col m_q_left_space">
<h1 style="font-family: sans-serif;">
About Us
</h1>
<p class="about_p">
    Our mission is to provide a platform that gives students from all backgrounds the
    opportunity to learn new skills that will give them a competitive edge in the marketplace.
    We are excited to launch with the hopes of changing lives through education. Our
    product is a platform filled with a cohesive objective for our students and teachers.
</p>
</div>

<div class="col-md-12 padding_4_col m_q_left_space">
<img src="{{ asset('images/36.png') }}"  class="img_ab" alt="" srcset="">
</div>

</div>




</div>
</section>







@endsection
