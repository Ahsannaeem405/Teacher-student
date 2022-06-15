@extends('header2')
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
                <h3 class="text-heading" style="font-weight: lighter">Write and share your content</h3>
                <h2 class="textbold">Read and extend technical knowledge</h2>
                <button class="btn freeBtn ">Write a Blog</button><br>
                <button class="btn freeBtn comb_btn">Post Content</button>
            </div>
</div>







<img class="header-dots-img" src="http://localhost/Teacher-student/public/images/dot-shape-primary.svg" alt="Image">










































        <section style="margin-top: 15px;" class="cardbgcolor">
            <div class="container ">
        <div style="row" >
        <div class="col-sm-4">
        <div class="pp">
            <a href="#" class="b_heading_b" style="
            font-size: 24px;"> < Back</a>
        </div>
        </div>
        <div class="col-sm-5">
        <div class="text-center">    <h1 class="text-heading blog_heading common_blog_color">Latest News & Articles</h1></div>


        </div>
        <div class="col-sm-3 " style="position: relative;padding-top: 16px;">

            {{--  <div style="position: absolute;top: 41%;
            left: 3%;">
                <img class="" src="http://localhost/Teacher-student/public/images/dot-shape-primary.svg" alt="Image">
            </div>  --}}

            <div style="text-align: right;">
            <i class="glyphicon glyphicon-arrow-up glyp" ></i><span class="b_side_he next_he box_b">Demo Text</span>
        </div>

    </div>



        </div>









            </div>
            </section>



            <div style="width: 100%"">
                <div style="position:relative">
                    <div style="position: absolute;
                    top: 882px;
                    right: 0%;">
                        <img class="img_side" src="http://localhost/Teacher-student/public/images/dot-shape-primary.svg" alt="Image">
                    </div>
                </div>
            </div>


    <section style="margin-top: 24px;" class="cardbgcolor">
        <div class="container">
    <div class="row">





            <div class="col-md-8 " >



                <div style="position:relative">
                    <div class="pos_l">
                        <img class="img_side" src="http://localhost/Teacher-student/public/images/dot-shape-primary.svg" alt="Image">
                    </div>
                </div>






<div class="box_b p_con " style="position: relative;">
            <div class="demo_b">
Demo
</div>
<img class="img_width" src="https://image.shutterstock.com/z/stock-photo-sexy-secretary-personal-assistant-typical-office-life-man-bearded-hipster-boss-sit-in-leather-1484628398.jpg"  alt="" srcset="">

<h3 class="bLog_b_head common_blog_color">Easy Python Course.</h3>
<h4 class="b_heading_b">Overview</h4>

<h3 class="r_m_space">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis adipisci beatae aperiam temporibus <br> obcaecati magni, nesciunt repellendus architecto corporis numquam nemo porro iste! Officiis, esse dolorem voluptas a itaque cum.</h3>
<div class=" r_m_space">
  <h4>  <a href="{{ url('/blog_detail') }}" class="b_heading_b">Read more</a>   </h4>
</div>
</div>

<div class="box_b p_con" style="position: relative;">
    <div class="demo_b">
Demo
</div>
<img class="img_width" src="https://image.shutterstock.com/z/stock-photo-sexy-secretary-personal-assistant-typical-office-life-man-bearded-hipster-boss-sit-in-leather-1484628398.jpg"  alt="" srcset="">

<h3 class="bLog_b_head common_blog_color">Easy Python Course.</h3>
<h4 class="b_heading_b">Overview</h4>

<h3 class="r_m_space">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis adipisci beatae aperiam temporibus <br> obcaecati magni, nesciunt repellendus architecto corporis numquam nemo porro iste! Officiis, esse dolorem voluptas a itaque cum.</h3>
<div class=" r_m_space">
<h4>  <a href="{{ url('/blog_detail') }}" class="b_heading_b">Read more</a>   </h4>
</div>
</div>



</div>















<div class="col-md-4 mt_blog_side">

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
        </section>

<div class="pagi_mtMb">
    <nav>
        <ul class="pagination">
        {{--  <li>
        <a href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        </a>
        </li>  --}}
        <li class="active" style="display: none"><a href="#">1</a></li>
        <li><a href="#" class="activate">1</a></li>
        <li><a href="#" class="pagi_style">2</a></li>
        <li><a href="#" class="pagi_style">3</a></li>
        <li><a href="#" class="pagi_style">4</a></li>
        <li class="active" style="display: none"><a href="#">1</a></li>
        {{--  <li>
        <a href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        </a>
        </li>  --}}
        </ul>
        </nav>
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
