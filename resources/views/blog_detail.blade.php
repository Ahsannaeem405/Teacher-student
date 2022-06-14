@extends('user.layout')
@section('content')
<link rel="stylesheet" href="{{ asset('css/style4.css') }}">
<style>
    .banner{
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

<div class="banner">
            <div class="banner_text text-center">
                <h3 class="text-heading" style="font-weight: lighter">Write and share your content</h3>
                <h2 class="textbold">Read and extend technical knowledge</h2>
                <button class="btn freeBtn ">Write a Blog</button><br>
                <button class="btn freeBtn comb_btn">Post Content</button>
            </div>
        </div>
        <img class="header-dots-img" src="http://localhost/Teacher-student/public/images/dot-shape-primary.svg" alt="Image">

<section style="margin-top: 15px;" class="cardbgcolor">
    <div class="container text-center">
<div style="display: inline-flex;">

    <a href="#" class="b_heading_b" style="padding-right: 54px;
    padding-top: 6%;
    font-size: 26px;"> < Back</a>

    <h1 class="text-heading blog_heading common_blog_color">Latest News & Articles</h1>

</div>
    </div>
    </section>





    <section style="margin-top: 15px;" class="cardbgcolor">

    <div style="row">
        <div style="position:relative"">
            <div style="position: absolute;
            top: 494px;
            left: 1%;">
                <img  src="http://localhost/Teacher-student/public/images/dot-shape-primary.svg" alt="Image">
            </div>
        </div>

        <div class="container">
        <div class="col-md-7 box_b" style="position: relative;">
<div class="demo_b">
Demo
</div>
<img class="img_width" src="https://image.shutterstock.com/z/stock-photo-sexy-secretary-personal-assistant-typical-office-life-man-bearded-hipster-boss-sit-in-leather-1484628398.jpg"  alt="" srcset="">

<h3 class="bLog_b_head common_blog_color">Easy Python Course.</h3>
<h4 class="b_heading_b">Overview</h4>

<h3 class="r_m_space">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis adipisci beatae aperiam temporibus <br> obcaecati magni, nesciunt repellendus architecto corporis numquam nemo porro iste! Officiis,

    <br>

Lorem ipsum dolor sit amet, consectetur <br> adipisicing elit. Enim, ullam ex accusamus ea sunt recusandae nisi, animi aliquid, <br> at similique ipsam! Veniam at consequatur beatae ratione sint, <br> minus suscipit quo.

    esse dolorem voluptas a <br> itaque cum. Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> Rerum praesentium eaque vitae labore. Aperiam quaerat veniam, aut, distinctio sit <br> nihil iste soluta mollitia libero, ullam nemo voluptatem laborum. Pariatur, tenetur. </h3>
{{--  <div class=" r_m_space">
  <h4>  <a href="#" class="b_heading_b">Read more</a>   </h4>
</div>  --}}

</div>















<div class="col-md-4 col-md-offset-1" >

    <div class="col-sm-12" style="background-color:#f2f0f0">
<h3 class="text-center common_blog_color" style="    font-size: 31px;">
Recent articles
</h3>
        <div class="row pt_b">
    <div class="col-sm-5" style="    padding: 0;">
        <img class="img_blog_side" src="https://image.shutterstock.com/z/stock-photo-sexy-secretary-personal-assistant-typical-office-life-man-bearded-hipster-boss-sit-in-leather-1484628398.jpg" class="img_blog_side" alt="" srcset="">
        </div>
        <div class="col-sm-7">
<h4 class="b_side_he">
title demo
</h4>
<p>
jk fa jfkdsaj fdak Lorem ipsum dolor sit amet consectetur adipisicing
</p>
<p class="b_heading_b">
12 Sep 2022
</p>
        </div>
</div>









<div class="row pt_b">
    <div class="col-sm-5" style="    padding: 0;">
        <img class="img_blog_side" src="https://image.shutterstock.com/z/stock-photo-sexy-secretary-personal-assistant-typical-office-life-man-bearded-hipster-boss-sit-in-leather-1484628398.jpg" class="img_blog_side" alt="" srcset="">
        </div>
        <div class="col-sm-7">
<h4 class="b_side_he">
title demo
</h4>
<p>
jk fa jfkdsaj fdak Lorem ipsum dolor sit amet consectetur adipisicing
</p>
<p class="b_heading_b">
12 Sep 2022
</p>
        </div>
</div>




<div class="row pt_b">
    <div class="col-sm-5" style="    padding: 0;">
        <img class="img_blog_side" src="https://image.shutterstock.com/z/stock-photo-sexy-secretary-personal-assistant-typical-office-life-man-bearded-hipster-boss-sit-in-leather-1484628398.jpg" class="img_blog_side" alt="" srcset="">
        </div>
        <div class="col-sm-7">
<h4 class="b_side_he">
title demo
</h4>
<p>
jk fa jfkdsaj fdak Lorem ipsum dolor sit amet consectetur adipisicing
</p>
<p class="b_heading_b">
12 Sep 2022
</p>
        </div>
</div>










    </div>

    </div>



















</div>



        </div>
<div class="related_l_r_mr">
<div class="row">

    <div style="position:relative"">
        <div style="position: absolute;
        top: 1%;
        right: -7%;">
            <img class="" src="http://localhost/Teacher-student/public/images/dot-shape-primary.svg" alt="Image">
        </div>
    </div>




<div class="col-md-3">





    <div class=" pt_b">
        <div class="" style="    padding: 0;">
            <img class="img_blog_side" src="https://image.shutterstock.com/z/stock-photo-sexy-secretary-personal-assistant-typical-office-life-man-bearded-hipster-boss-sit-in-leather-1484628398.jpg" class="img_blog_side" alt="" srcset="">
            </div>
            <div class="">
    <h4 class="mt_r b_side_he">
    title demo
    </h4>
    <p>
    jk fa jfkdsaj fdak Lorem ipsum dolor sit amet consectetur adipisicing
    </p>
    <p class="b_heading_b">
    12 Sep 2022
    </p>
            </div>
    </div>








</div>
<div class="col-md-3">
    <h4 class="b_heading_b" style="padding-top: 28%;">See More > </h4>
</div>
</div>
</div>
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
                    <button>Learn More <img src="{{url('/images/arrow.png')}}" alt="Image"/></button>
                    <button>Join With Us!</button>
                </div>
            </div>
            <div class="one-img">
                <img src="{{url('/images/dot-shape-white.svg')}}" alt="Image"/>
            </div>
        </div>
        </section>




@endsection
