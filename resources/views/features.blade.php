@extends('user.layout')

@section('content')

<style>
    .banner2{
        position: relative;
    }
    .banner_text{
    position: absolute;
    top: 67%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
    width: fit-content;
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
.comb_btn{
    background:#c9c97ea6 !important;margin-top: 41px;
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

<div class="banner2 banner59">
            <div class="banner_text text-center">
                <h3 class="text-heading" style="font-weight: lighter">Top Features</h3>
                <h2 class="textbold">We unleach genius in your kids</h2>

            </div>
</div>

@php
    $courses = (new \App\Models\CreateCourse())
    ->orderBy('created_at', 'DESC')
    ->take(6)
    ->get();
@endphp

<div class="container mt-4">
    <div class="row m-0" style="width: 100%">
        @foreach($courses as $course)
            @php
                $imagePath = explode('.', !is_null($course->course_image) ? $course->course_image : 'do_not_delete.png');
            @endphp
            <div class="col-md-4">
                <div class="" style="    padding: 0;">
                    <img src="{{asset('images')."/". $imagePath[0].".".$imagePath[1]}}"
                         class="img_blog_side img_blog_side2" alt="Card image cap">
{{--                    <img class="img_blog_side img_blog_side2" src="{{ asset('images/42.png') }}" alt="" srcset="">--}}
                </div>

                <div class="">
                    @if(auth()->user())
                        @if(auth()->user()->role == '2')
                            <a href="{{ route('teacher.dashboard') }}" style="text-decoration: none">
                                <h4 class="mt_r b_side_he">{{ $course->course_name }}</h4>
                            </a>
                        @else
                            <a href="{{ route('student.dashboard') }}" style="text-decoration: none">
                                <h4 class="mt_r b_side_he">{{ $course->course_name }}</h4>
                            </a>
                        @endif
                    @else
                        <a href="{{ url('/login') }}" style="text-decoration: none">
                            <h4 class="mt_r b_side_he">{{ $course->course_name }}</h4>
                        </a>
                    @endif
                    <p class="text-design">
                        {!! $course->course_description !!}
                    </p>
                </div>
            </div>
        @endforeach
    </div>
</div>


<div class="next-project3 next-project2">
    <div class="two-img">
        <img src="{{url('/images/dot-shape-primary.svg')}}" alt="Image"/>
        <img src="{{url('/images/dot-shape-white.svg')}}" alt="Image"/>
    </div>
    <div class="container text-center" style="color: white;">

        <h1>You can learn a new skill</h1>
        <h1>anywhere!</h1>
    </div>
    <div class="one-img">
        <img src="{{url('/images/dot-shape-white.svg')}}" alt="Image"/>
    </div>
</div>





<br>


<div class="c_cont" style="margin-top: 10rem !important; ">


    <div class="row m-0">
<div class="col-md-12 m-0" style="padding: 0">
<div class="kids_sec">
    <div class="row" style="margin-left: -16px;margin-top: -12rem;">
        <div class="col-md-6">
            <div class="inrSec">
                <h1 class="on_resp">
                Friendly ways to totur your kids
                </h1>
                <p class="text-design on_resp2">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores veniam odio mollitia quos debitis, qui expedita voluptate ea nesciunt accusantium modi adipisci doloribus! Inventore amet voluptatem, earum suscipit quam aliquid!
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                </p>
                </div>
        </div>

    </div>

</div>
</div>
</div>
</div>

<div class="doble_img">
<img class="img_side" src="http://localhost/Teacher-student/public/images/dot-shape-primary.svg" alt="Image">
<img class="img_side" src="http://localhost/Teacher-student/public/images/dot-shape-primary.svg" alt="Image">
</div>
<div class="s_img">
    <img class="img_side" src="http://localhost/Teacher-student/public/images/dot-shape-primary.svg" alt="Image">
</div>
<div class="container " >
    <div class="row m-0">
    <div class="col-md-12 text-center">
<h1 class="margin-virtual-card under-line t_mgn">
With Virtually Teaching You Can
</h1>

    </div>

    <div class="col-sm-12 box_b vistual-margin">
<div class='virtual-width'>

    <div class='col-md-6'>
        <img src="{{ asset('images/47.png') }}" class="img_width-virtual" alt="" srcset="">
    </div>
    <div class='col-md-6'>
        <h2 class="margin-virtual-card on_resp2">Flexible and Convienient</h2>
<p class="text-design ml_t on_resp2">
    Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit.
     Error natus provident, expedita, molestiae adipisci vitae perspiciatis at ipsum, repellat earum assumenda ea. Nesciunt vero sapiente voluptates totam incidunt sit eligendi.
</p>
<a href="#" class="btn btn-bg-color common_blog_color btn_ad_style learn-ml">Learn More</a>
    </div>
</div>
    </div>

    </div>

    </div>


    <div class="s_img2">
        <img class="img_side" src="http://localhost/Teacher-student/public/images/dot-shape-primary.svg" alt="Image">
    </div>


    <div class="container">
        <div class="row m-0">
        <div class="col-md-12 text-center">


        </div>

        <div class="col-sm-12 box_b vistual-margin sec_cd">
    <div class='virtual-width'>


        <div class='col-md-6'>
            <h2 class="margin-virtual-card on_resp2">Flexible and Convienient</h2>
    <p class="text-design ml_t on_resp2">
        Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit.
         Error natus provident, expedita, molestiae adipisci vitae perspiciatis at ipsum, repellat earum assumenda ea. Nesciunt vero sapiente voluptates totam incidunt sit eligendi.
    </p>
    <a href="#" class="btn btn-bg-color common_blog_color btn_ad_style learn-ml">Learn More</a>
        </div>
        <div class='col-md-6'>
            <img src="{{ asset('images/48.png') }}" class="img_width-virtual" alt="" srcset="">
        </div>
    </div>
        </div>

        </div>

        </div>







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
