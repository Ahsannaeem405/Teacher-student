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
<div class="container box_b">

<div class="row">
<div class="col-md-2 dots-div-height">
    <div class="search-dots">
    <span class="dot first-dot-color"></span>
    <span class="dot second-dot-color"></span>
    <span class="dot third-dot-color"></span>
    </div>
<!-- <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSmGtlD4H_m8lH4C6Kw26faGl1f9DD7-0iCeS_8EJEe_e91Pm9mqNDCj8QqhB9hezpmUdI&usqp=CAU" height="64" width="162" alt="" srcset=""> -->
</div>
<div class="col-md-9" >
    <div class="mt mb position">
    <i class="fa-solid fa-magnifying-glass serach-icon-design"></i>
        <input type="text" class="input-bg-color text-size" placeholder="Python...">

      </div>
</div>
</div>




</div>
</section>

<section style="margin-top: 15px;" class="cardbgcolor">
    <div class="container text-center">
<div style="display: inline-flex;">

    <a href="#" style="padding-right: 54px;
    padding-top: 7%;font-size: 19px;"> < Back</a>

    <h1 class="text-heading blog_heading">Latest News & Articles</h1>

</div>
    </div>
    </section>





    <section style="margin-top: 15px;" class="cardbgcolor">

    <div style="row">
        <div class="container ">
        <div class="col-md-8 box_b" style="position: relative;">
<div style="background-color: #c9c97e;
position: absolute;
right: 1px;
font-size: 19px;
color: white;
top: 48px;
padding-left: 30px;
padding-top: 2px;
height: 34px;
width: 156px;
border-radius: 20px 0px 0px 20px;border-right: 5px solid #9d9d6b;">
Demo
</div>
<img class="img_width" src="https://image.shutterstock.com/z/stock-photo-sexy-secretary-personal-assistant-typical-office-life-man-bearded-hipster-boss-sit-in-leather-1484628398.jpg"  alt="" srcset="">

<h3 class="bLog_b_head">Easy Python Course.</h3>
<h4 class="b_heading_b">Overview</h4>

<h3 class="r_m_space">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis adipisci beatae aperiam temporibus <br> obcaecati magni, nesciunt repellendus architecto corporis numquam nemo porro iste! Officiis, esse dolorem voluptas a itaque cum.</h3>
<div class=" r_m_space">
  <h4>  <a href="#" class="b_heading_b">Read more</a>   </h4>
</div>

</div>















<div class="col-md-4" >

    <div class="col-lg-12">
<div class="pt_b">
    <div class="col-sm-5">
        <img class="img_blog_side" src="https://www.incimages.com/uploaded_files/image/1024x576/getty_160926937_970647970450031_50806.jpg" class="img_blog_side" alt="" srcset="">
        </div>
        <div class="col-sm-7">
    fsgkgjkdfsdk
        </div>
</div>
    </div>

    </div>



















</div>



        </div>
        </section>




@endsection
