@extends('user.layout')
@section('content')
<style>
@body{
background-color:white !important;
}
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
        width: 39% ;
        color:black;
        font-family: sans-serif;
        font-size: 20px;
    }

 .textbold{
        color: white;
        font-size: 42px;
    font-family: Louis George Cafe Bold;
    }
    .card-img-top{
        width: 100%;

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
        color: rgb(165, 163, 163);
        font-size: 14px;
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

    .checked {
        color: #C9C97E;
    }

    /*.star-icon .row .col-md-12>p>span{*/
    /*    font-family: 'Open Sans', Arial, sans-serif;*/
    /*    font-size: 14px;*/
    /*    text-align: justify;*/
    /*    background-color: unset;*/
    /*    color: white;*/
    /*}*/
</style>

<div class="banner">

    <div class="banner_text text-center">
        <h3 class="text-heading">Welcome To Virtually Teaching</h3>
        <h2 class="textbold">The Future Of Online Teaching</h2>
        <a href="{{ url('/register/here') }}" class="btn freeBtn freeBtn2">Start Free trail</a>
    </div>

</div>

<div style="background-color: #FAFAFA;">
    <div class="row row_width">
        <div class="col-lg-2 text-center"></div>
        <div class="col-lg-9 text-center">
{{--          <h1 style="">LEARNING PLUGIN</h1>--}}
        </div>
        <div class="col-xs-1" style="text-align: right;padding-right: 0;">
            <img class="header-dots-img" style="opacity: 50%;" src="{{ asset('/images/dt1.png') }}" alt="Image">
        </div>
    </div>

    <section style="margin-top: 15px;" class="cardbgcolor">
        <div class="container box_b">
            <div class="row">
                <div class="col-xs-2 dots-div-height">
                    <div class="search-dots">
                        <span class="dot first-dot-color"></span>
                        <span class="dot second-dot-color"></span>
                        <span class="dot third-dot-color"></span>
                    </div>
<!-- <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSmGtlD4H_m8lH4C6Kw26faGl1f9DD7-0iCeS_8EJEe_e91Pm9mqNDCj8QqhB9hezpmUdI&usqp=CAU" height="64" width="162" alt="" srcset=""> -->
                </div>
                <div class="col-xs-9" >
                    <div class="mt mb position">
                        <i class="fa-solid fa-magnifying-glass serach-icon-design search-butn" style="cursor: pointer"></i>
                        <input type="text" class="input-bg-color text-size search-inputtt" placeholder="Python...">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cardbgcolor">
        <div class="container ">
            <div class="row card-margin m-0 ruslt_ser">
                @php
                    $courses = (new \App\Models\CreateCourse())->withcount('purchaseCourse')
                    ->with('purchaseCourse')
                    ->orderBy('purchase_course_count','DESC')
                    ->take(3)
                    ->get();
                @endphp

                @if(count($courses) > 0)
                    @foreach($courses as $course)
                        @php
                            $imagePath = !is_null($course->course_image) ? $course->course_image : 'do_not_delete.png';
                            $current = now();
                            $created = $course->created_at;
                            $dateDiff = date_diff($current,$created);
                        @endphp

                        <div class="col-md-4 p_cours_padding">
                            <div class="card border box_b">
                                <img src="{{asset('images')."/". $imagePath}}"
                                                        class="card-img-top card-img-radius" >
                                <div class="card-body" style="text-align: center; align-items: center">
                                    <h5 class="card-title card_heading" >{{ $course->course_name }}</h5>
                                    <p class="card-text">{!! $course->course_description !!}</p>
                                    <div class="row card_section m-0">
                                        <div class="col-lg-12 mar-top">
                                            <div class="col-md-4">
                                                <a href="{{ url('/login') }}">
                                                    <i class="fa-solid fa-message icon_prop message-ml" style="cursor: pointer"></i>
                                                </a>
                                            </div>
                                            <div class="col-md-4">
                                                <i class="fa-solid fa-download icon-size  icon_prop"></i>
                                            </div>
                                            <div class="col-md-4">
                                                <i class="fa-solid fa-clock icon_prop"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="col-md-4"></div>
                                            <div class="col-md-4">
                                                <span class="greyColor">{{ ($course->course_dowloads < 1) ? '0' : $course->course_dowloads}}</span>
                                            </div>
                                            <div class="col-md-4">
                                                <span class="greyColor">{{ ($dateDiff->d > 0) ? $dateDiff->d.' d' : $dateDiff->h.' h' }} {{ $dateDiff->i }} m</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p><strong>No record found...</strong></p>
                @endif
            </div>
        </div>
    </section>
</div>

<div class="container ">
    <div class="row m-0">
        <div class="col-md-12">
            <img src="{{ asset('images/a25.png') }}" class="img_width" alt="" srcset="">
        </div>
    </div>
</div>

<div class="dots-div">
    <img src="{{url('/images/dot-shape-primary.svg')}}" alt="Image"/>
    <img src="{{url('/images/dot-shape-primary.svg')}}" alt="Image"/>
    <img src="{{url('/images/dot-shape-primary.svg')}}" alt="Image"/>
</div>

<div class="container">
    <div class="row m-0">
        <div class="col-md-12 text-center">
            <h1 class="under-line2">
                With Virtually Teaching You Can
                <div class="text-center" style="margin-bottom: 53px;">
                    <img src="{{ asset('images/aa26.png') }}" style="width: 8%;" alt="" srcset="">
                </div>
            </h1>
        </div>

        <div class="col-sm-12 box_b ">
            <div class='virtual-width'>
                <div class='col-md-6'>
                    <h2 class="margin-virtual-card">Flexible and Convienient</h2>
                    <p class="text-design">
                        Our goal is to bring together a community of future thought leaders, so that they can learn new
                        skills that can change the trajectory of their lives. Having access to a system that will provide
                        you with a significant amount of various subject titles to learn from at any time is key. The future
                        of learning is online and we are excited to embark on this journey with our great students
                        garnering new skills, and wonderful teachers providing profound knowledge based on
                        experience
                    </p>
                    <div class="btn_cs">
                        <a href="{{ url('register/here') }}" class="btn btn-bg-color common_blog_color btn_ad_style learn-ml">Learn More</a>
                    </div>
                </div>
                <div class='col-md-6'>
                    <img src="{{ asset('images/aa27.png') }}" class="img_width-virtual" alt="" srcset="">
                </div>
            </div>
        </div>
    {{--  <img class="card-side-dots-img" src="http://localhost/Teacher-student/public/images/dot-shape-primary.svg" alt="Image">  --}}
    </div>
</div>

{{--    <div class="next-project4 ">--}}
{{--        <div class="two-img" style="position: absolute; left: 0; margin-top: -20px;">--}}
{{--            <img src="{{url('/images/dot-shape-primary.svg')}}" alt="Image"/>--}}
{{--            <img src="{{url('/images/dot-shape-white.svg')}}" alt="Image"/>--}}
{{--        </div>--}}

{{--        <div class="one-img" style="position: absolute; left: 96%; margin-top: 19%;">--}}
{{--            <img src="{{url('/images/dot-shape-white.svg')}}" alt="Image"/>--}}
{{--        </div>--}}

{{--        <img src="{{ asset('images/29.png') }}" style="width: 100%; object-fit: cover">--}}

{{--        <div class="container text-center ">--}}
{{--            <div class="row">--}}
{{--                <div class="col-xs-9 col-centered" style="margin-top: -105px;">--}}

{{--            <h1 --}}
{{--                style="font-size:38px;margin-top: 12rem;--}}
{{--                    margin-bottom:3rem; color: white;font-weight: bold;--}}
{{--                    font-family: sans-serif;">--}}
{{--                When you're determined to learn you will find a balance.--}}
{{--            </h1>--}}

{{--            <h1--}}
{{--                style="font-size:38px;margin-top: 12rem;--}}
{{--                            margin-bottom:3rem; color: white;font-weight: bold;--}}
{{--                            font-family: sans-serif;">--}}
{{--            </h1>--}}

{{--            <p style="font-size: 23px;color: white;font-family: sans-serif;">--}}
{{--                A great book by the author Nir Eyal called Hooked. This book is amazing. He talks--}}
{{--                about building Habit Forming Products. Think about it: Habit Forming Products, hooked--}}
{{--                on Instagram, Clubhouse, Gaming, and many others platforms. I just can't get enough--}}
{{--                of it. Why is it that my subconscious is telling me that if I don???t get on it ???I???m missing--}}
{{--                something??? part of that needing to be in the know!! This tactic of building a product that--}}
{{--                users can???t get enough of is dangerous in a sense so make sure you build something--}}
{{--                great with integrity. Make sure you build something that has a daily purpose!! User--}}
{{--                experience is important because that's one of the first things users, or potential--}}
{{--                customers talk about. People have a short attention span and they want to do things--}}
{{--                fast without any hold up. So figure out a way to give the customer an easy way to--}}
{{--                navigate through your app or website or sass product.--}}
{{--            </p>--}}

{{--                    <p style="font-size: 23px;color: white;font-family: sans-serif;"></p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}




    <div class="container">
        <div class="row ">
            <div class="col-md-12 text-center">
                <h1 class="under-line">
                Testimonial
                </h1>
            </div>
        </div>

        <div class="row testimonial-margin m-0">
            <img class="testimonial-dots" style="position: absolute" src="http://localhost/Teacher-student/public/images/dot-shape-primary.svg" alt="Image">
            <div class="w-100 text-center row m-0">
                <div class="col-md-4 col-md-offset-2">
                    <div class="card border box_b">
                        <i class="fa-solid fa-comment coment-design"></i>
                        <div class="text-center" style="padding-top: 20px">
                            <img class="img-circle img-margin " width="100" height="100" style="object-fit: cover;"
                                src="{{asset('images/Krystle.jpg')}}" alt="Card image cap">
                            <h3>Krystle</h3>
                        </div>
                        <div class="card-body card-body-bg" style="padding-bottom: 2px;">
                            <div class="star-icon " style="margin: 11px;">
                                <p class="t_para">I used this tutoring service for my 2 girls, and the results were amazing!
                                    The Tutor was patient, punctual, and taught my daughters how to read. I would refer them to everyone!
                                    <br>
                                    <div class="star-margin">
                                        <i class="glyphicon glyphicon-star star_color"></i>
                                        <i class="glyphicon glyphicon-star star_color"></i>
                                        <i class="glyphicon glyphicon-star star_color"></i>
                                        <i class="glyphicon glyphicon-star star_color"></i>
                                        <i class="glyphicon glyphicon-star star_color"></i>
                                    </div>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card border box_b">
                        <i class="fa-solid fa-comment coment-design"></i>
                        <div class="text-center" style="padding-top: 20px">
                            <img class="img-circle img-margin " width="100" height="100" style="object-fit: cover;"
                            src="{{ asset('images/Bre.jpg') }}" alt="Card image cap">
                            <h3>Bre</h3>
                        </div>
                        <div class="card-body card-body-bg" style="padding-bottom: 2px;">
                            <div class="star-icon" style="margin: 11px;">
                                <p class="t_para">
                                    This tutoring service has made it easier for my two children to
                                    understand modern learning materials used in the current school???s
                                    curriculum.
                                </p>
                                <div class="star-margin">
                                    <i class="glyphicon glyphicon-star star_color"></i>
                                    <i class="glyphicon glyphicon-star star_color"></i>
                                    <i class="glyphicon glyphicon-star star_color"></i>
                                    <i class="glyphicon glyphicon-star star_color"></i>
                                    <i class="glyphicon glyphicon-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <!-- last blue section start -->
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
                <a href="{{ url('register/here') }}" class="footer-bannar-learn-more">Learn More <img src="{{url('/images/arrow.png')}}" alt="Image"/></a>
                <a href="{{ url('register/here') }}" class="footer-bannar-join-us">Join With Us!</a>
            </div>
        </div>
        <div class="one-img">
            <img src="{{url('/images/dot-shape-white.svg')}}" alt="Image"/>
        </div>
    </div>
@endsection

@section('JS')
        <script>
            $(document).ready(function() {
                $(document).on('keyup', '.search-inputtt', function() {
                    var data=$(".search-inputtt").val();
                    $(this).append('<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>');

                    $.ajax({
                        url: '{{ url('/main_find_course') }}',
                        data: {
                            data
                        },
                        type: 'post',
                        success: function(result) {
                            $(".ruslt_ser").empty();
                            $(".ruslt_ser").append(result);
                        }
                    });
                });
            });
        </script>
@endsection
