@extends('user.layout')

@section('content')

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
    width: fit-content;
    }
    .freeBtn{

        background: #C9C97E;
        border: 1px solid #707070;
        margin-top:30px;
        font-weight:bolder;
        width: 30% !important;
        font-size: 21px;
        color:black;
        font-family:sans-serif;
    }
.comb_btn{
    background:#7a7a61b0 !important;margin-top: 41px;color:white !important;font-family:sans-serif;
}
 .textbold{

        color: white;
        font-size: 43px;
        font-family: sans-serif;
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

<div class="banner53">
            <div class="banner_text text-center">
                <h3 class="text-heading" style="font-weight: lighter">Write and share your content</h3>
                <h2 class="textbold">Read and extend technical knowledge</h2>
                <button class="btn freeBtn " >Write a Blog</button><br>
                <button class="btn freeBtn comb_btn">Post Content</button>
            </div>
</div>







<div class="row row_width m-0">
    <div class="col-xs-2 text-center"></div>
<div class="col-xs-9 text-center">
<h1 style="font-size: 84px;color:#f0f0f0;opacity:54%; font-family: sans-serif;font-weight: bold">
BLOG
</h1>
</div>
<div class="col-xs-1" style="text-align: right;padding-right: 0;">
    <img class="header-dots-img" style="opacity: 50%;" src="{{ asset('/images/dt1.png') }}" alt="Image">
</div>
</div>










































        <section style="margin-top: 15px;" class="cardbgcolor">
            <div class="container row_width">
        <div style="row row_width m-0" >
        <div class="col-sm-4">
        <div class="pp">
            <a href="#" class="b_heading_b" style="
            font-size: 23px;"> < Back</a>
        </div>
        </div>
        <div class="col-sm-5">
        <div class="text-center">    <h1 class="text-heading blog_heading common_blog_color">Latest News & Articles</h1>
<img src="{{ asset('images/Lin22.png') }}" style="height: 5px;" alt="" srcset="">
<img src="{{ asset('images/Lin22.png') }}" style="height: 5px;" alt="" srcset="">

        </div>


        </div>
        <div class="col-sm-3 " style="position: relative;padding-top: 16px;">

            {{--  <div style="position: absolute;top: 41%;
            left: 3%;">
                <img class="" src="http://localhost/Teacher-student/public/images/dot-shape-primary.svg" alt="Image">
            </div>  --}}

            <div style="text-align: right;">
            <i class="glyphicon  glyp" >+</i><span class="b_side_he next_he box_b">Add New</span>
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
        <div class="container row_width">
    <div class="row row_width m-0">





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
<img class="img_width" src="{{ asset('images/33.png') }}" style="height: auto !important"  alt="" srcset="">

<h3 class="bLog_b_head common_blog_color">Easy Python Course.</h3>
<h4 class="b_heading_b">21-June-2021</h4>

<h3 class="r_m_space">A great book by the author Nir Eyal called Hooked. This book is amazing. He talks
    about building Habit Forming Products. Think about it: Habit Forming Products, hooked
    on Instagram, Clubhouse, Gaming, and many others platforms. I just can't get enough
    of it. Why is it that my subconscious is telling me that if I don’t get on it “I’m missing
    something” part of that needing to be in the know!! This tactic of building a product that
    users can’t get enough of is dangerous in a sense so make sure you build something
    great with integrity. Make sure you build something that has a daily purpose!! User
    experience is important because that's one of the first things users, or potential
    customers talk about. People have a short attention span and they want to do things
    fast without any hold up. So figure out a way to give the customer an easy way to
    navigate through your app or website or sass product.</h3>

</div>





</div>















<div class="col-md-4 ">

    <div class="col-sm-12" style="background-color:#f2f0f0">
<h3 class="text-center common_blog_color" style="    font-size: 31px;font-family: sans-serif !important;">
Recent articles
</h3>
        <div class="row pt_b">
    <div class="col-sm-5" style="    padding: 0;">
        <img class="img_blog_side" src="{{ asset('images/34.png') }}" class="img_blog_side" alt="" srcset="">
        </div>
        <div class="col-sm-7">
<h4 class="b_side_he">
    Easy Python Course
</h4>
<p>
    A great book by the author Nir Eyal called Hooked.
</p>
<p class="b_heading_b">
12 Sep 2022
</p>
        </div>
</div>









<div class="row pt_b">
    <div class="col-sm-5" style="    padding: 0;">
        <img class="img_blog_side" src="{{ asset('images/34.png') }}" class="img_blog_side" alt="" srcset="">
        </div>
        <div class="col-sm-7">
<h4 class="b_side_he">
    Easy Python Course
</h4>
<p>
    A great book by the author Nir Eyal called Hooked.
</p>
<p class="b_heading_b">
12 Sep 2022
</p>
        </div>
</div>




<div class="row pt_b">
    <div class="col-sm-5" style="    padding: 0;">
        <img class="img_blog_side" src="{{ asset('images/34.png') }}" class="img_blog_side" alt="" srcset="">
        </div>
        <div class="col-sm-7">
<h4 class="b_side_he">
    Easy Python Course
</h4>
<p>
    A great book by the author Nir Eyal called Hooked.
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




























        <div class="related_l_r_mr">
            <div class="row">





            <div class="col-md-3">





                <div class=" pt_b">
                    <div class="" style="    padding: 0;">
                        <img class="img_blog_side" src="https://image.shutterstock.com/z/stock-photo-sexy-secretary-personal-assistant-typical-office-life-man-bearded-hipster-boss-sit-in-leather-1484628398.jpg" class="img_blog_side" alt="" srcset="">
                        </div>
                        <div class="">
                <h4 class="mt_r b_side_he">
                    Easy Python Course
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
                <h4 class="b_heading_b" style="padding-top: 28%;">Read More > </h4>
            </div>
            </div>
            </div>




















        <div class="next-project ">
            <div class="two-img">
                <img src="{{url('/images/dot-shape-primary.svg')}}" alt="Image"/>
                <img src="{{url('/images/dot-shape-white.svg')}}" alt="Image"/>
            </div>
            <div class="container row_width">
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
