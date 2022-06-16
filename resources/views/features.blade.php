@extends('user.layout')

@section('content')

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
                <h3 class="text-heading" style="font-weight: lighter">Top Features</h3>
                <h2 class="textbold">We unleach genius in your kids</h2>

            </div>
</div>















<div class="container mt-4">
<div class="row" style="width: 100%">
<div class="col-md-4">

    <div class="" style="    padding: 0;">
        <img class="img_blog_side img_blog_side2" src="https://image.shutterstock.com/z/stock-photo-sexy-secretary-personal-assistant-typical-office-life-man-bearded-hipster-boss-sit-in-leather-1484628398.jpg" class="img_blog_side" alt="" srcset="">
        </div>


        <div class="">
            <h4 class="mt_r b_side_he">
            title demo
            </h4>
            <p class="text-design">
            jk fa Lorem ipsum dolor sit amet consectetur adipisicing
            </p>
            {{--  <p class="b_heading_b">
            12 Sep 2022
            </p>  --}}
                    </div>



</div>



<div class="col-md-4">

    <div class="" style="    padding: 0;">
        <img class="img_blog_side img_blog_side2" src="https://image.shutterstock.com/z/stock-photo-sexy-secretary-personal-assistant-typical-office-life-man-bearded-hipster-boss-sit-in-leather-1484628398.jpg" class="img_blog_side" alt="" srcset="">
        </div>


        <div class="">
            <h4 class="mt_r b_side_he">
            title demo
            </h4>
            <p class='text-design'>
            jk fa jfkdsaj fdak Lorem ipsum dolor consectetur adipisicing
            </p>
            {{--  <p class="b_heading_b">
            12 Sep 2022
            </p>  --}}
                    </div>



</div>




<div class="col-md-4">

    <div class="" style="    padding: 0;">
        <img class="img_blog_side img_blog_side2" src="https://image.shutterstock.com/z/stock-photo-sexy-secretary-personal-assistant-typical-office-life-man-bearded-hipster-boss-sit-in-leather-1484628398.jpg" class="img_blog_side" alt="" srcset="">
        </div>


        <div class="">
            <h4 class="mt_r b_side_he">
            title demo
            </h4>
            <p class="text-design">
            jk fa jfkdsaj fdak Lorem ipsum dolor sit  adipisicing
            </p>
            {{--  <p class="b_heading_b">
            12 Sep 2022
            </p>  --}}
                    </div>



</div>

</div>

</div>







<div class="next-project next-project2">
    <div class="two-img">
        <img src="{{url('/images/dot-shape-primary.svg')}}" alt="Image"/>
        <img src="{{url('/images/dot-shape-white.svg')}}" alt="Image"/>
    </div>
    <div class="container text-center">

        <h1>You can learn a new skill</h1>
        <h1>anywhere!</h1>
    </div>
    <div class="one-img">
        <img src="{{url('/images/dot-shape-white.svg')}}" alt="Image"/>
    </div>
</div>





<br>


<div class="container">
    <div class="r_p_img">
        <img class="img_side" src="http://localhost/Teacher-student/public/images/dot-shape-primary.svg" alt="Image">
    </div>
    
    <div class="row">
<div class="col-md-12">
<div class="kids_sec">
    <div class="row" style="margin-left: -16px;margin-top: -12rem;">
        <div class="col-md-6">
            <div class="inrSec">
                <h1>
                Friendly ways to totur your kids
                </h1>
                <p class="text-design">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores veniam odio mollitia quos debitis, qui expedita voluptate ea nesciunt accusantium modi adipisci doloribus! Inventore amet voluptatem, earum suscipit quam aliquid!
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laboriosam possimus doloremque facere, sed accusantium repellat cumque numquam vel voluptatibus? Est, consequatur quisquam odit natus commodi cupiditate officiis voluptatem unde itaque.
                </p>
                </div>
        </div>
        <div class="col-md-6"></div>
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
    <div class="row">
    <div class="col-md-12 text-center">
<h1 class="under-line t_mgn">
With Virtually Teaching You Can
</h1>

    </div>

    <div class="col-sm-12 box_b vistual-margin">
<div class='virtual-width'>

    <div class='col-md-6'>
        <img src="https://thumbs.dreamstime.com/b/asian-student-boy-video-conference-e-learning-teacher-computer-living-room-home-online-education-internet-social-187311773.jpg" class="img_width-virtual" alt="" srcset="">
    </div>
    <div class='col-md-6'>
        <h2 class="margin-virtual-card">Flexible and Convienient</h2>
<p class="text-design margin-virtual-card">
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
        <div class="row">
        <div class="col-md-12 text-center">


        </div>

        <div class="col-sm-12 box_b vistual-margin">
    <div class='virtual-width'>


        <div class='col-md-6'>
            <h2 class="margin-virtual-card">Flexible and Convienient</h2>
    <p class="text-design margin-virtual-card">
        Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit.
         Error natus provident, expedita, molestiae adipisci vitae perspiciatis at ipsum, repellat earum assumenda ea. Nesciunt vero sapiente voluptates totam incidunt sit eligendi.
    </p>
    <a href="#" class="btn btn-bg-color common_blog_color btn_ad_style learn-ml">Learn More</a>
        </div>
        <div class='col-md-6'>
            <img src="https://thumbs.dreamstime.com/b/asian-student-boy-video-conference-e-learning-teacher-computer-living-room-home-online-education-internet-social-187311773.jpg" class="img_width-virtual" alt="" srcset="">
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
