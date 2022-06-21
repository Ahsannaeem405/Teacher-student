
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
        width: 39% !important;
        color:black;
        font-family: sans-serif;
        font-size: 20px !important;
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
                <h3 class="text-heading">Welcome To Virtually Teaching</h3>
                <h2 class="textbold">The Future Of Online Teaching</h2>
                <button class="btn freeBtn ">Start Free trail</button>
            </div>

        </div>

<div style="background-color: #FAFAFA;">
<div class="row row_width">
    <div class="col-lg-2 text-center"></div>
<div class="col-lg-9 text-center">
<h1 style="font-size: ;color:#f0f0f0;opacity:54%; font-family: sans-serif;font-weight: bold">
LEARNING PLUGIN
</h1>
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
    <i class="fa-solid fa-magnifying-glass serach-icon-design"></i>
        <input type="text" class="input-bg-color text-size" placeholder="Python...">

      </div>
</div>
</div>




</div>
</section>

        <section class="cardbgcolor">

<div class="container ">
    <div class="row card-margin m-0">
        <div class="col-md-4 p_cours_padding">
            <div class="card border box_b">
                <img class="card-img-top card-img-radius" src="{{asset('images/a22.png')}}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title card_heading" >Virtual Teaching</h5>
                  <p class="card-text">Let's Learn Python Fast.</p>
                    <div class="row card_section m-0">
                    <div class="col-md-3 mar-top">
                                <i class="fa-solid fa-message icon_prop message-ml"></i>
                            </div>
                        <div class="col-md-3">

                        <i class="fa-solid fa-download icon-size"></i></i> <span class="greyColor">14</span>
                        </div>
                        <div class="col-md-6">
                            <i class="fa-solid fa-clock icon_prop"></i> <span class="greyColor">15 minute</span>
                        </div>
                    </div>
                    </div>
              </div>
        </div>
            <div class="col-md-4 col-lg p_cours_padding">
                <div class="card border box_b">
                    <img class="card-img-top card-img-radius" src="{{asset('images/a23.png')}}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title card_heading" >Virtual Teaching</h5>
                      <p class="card-text">Let's Learn Python Fast.</p>
                        <div class="row card_section m-0">
                            <div class="col-md-3 ">
                                <i class="fa-solid fa-message icon_prop message-ml"></i>
                            </div>
                            <div class="col-md-3">

                                <i class="fa-solid fa-user-group icon_prop" ></i> <span class="greyColor">14</span>
                            </div>
                            <div class="col-md-6">
                                <i class="fa-solid fa-clock icon_prop"></i> <span class="greyColor">15 minute</span>
                            </div>
                        </div>
                        </div>
                  </div>
        </div>
            <div class="col-md-4 col-lg p_cours_padding">
                <div class="card border box_b">
                    <img class="card-img-top card-img-radius" src="{{asset('images/a24.png')}}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title card_heading" >Virtual Teaching</h5>
                      <p class="card-text">Let's Learn Python Fast.</p>
                        <div class="row card_section m-0">
                            <div class="col-md-3 col-sm-6">
                                <i class="fa-solid fa-message icon_prop message-ml"></i>
                            </div>
                            <div class="col-md-3 col-sm-6">

                                <i class="fa-solid fa-user-group icon_prop" ></i> <span class="greyColor">14</span>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <i class="fa-solid fa-clock icon_prop"></i> <span class="greyColor">15 minute</span>
                            </div>
                        </div>
                        </div>
                  </div>
        </div>
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
            It’s easy to schedule sessions with our tutors. Our tutors will meet with you at the nearest library to your home. Absolutely no need for long journeys. For students at farther locations, we can easily schedule a live video session. With this, students can revise and study at their own pace, pausing, rewinding, testing and exploring until they fully understand the course.
        </p>
<div class="btn_cs">        <a href="#" class="btn btn-bg-color common_blog_color btn_ad_style learn-ml">Learn More</a></div>
            </div>
            <div class='col-md-6'>
                <img src="{{ asset('images/aa27.png') }}" class="img_width-virtual" alt="" srcset="">
            </div>
        </div>
            </div>
    <img class="card-side-dots-img" src="http://localhost/Teacher-student/public/images/dot-shape-primary.svg" alt="Image">
    </div>

    </div>





    <div class="next-project4 ">

        <div class="two-img">
            <img src="{{url('/images/dot-shape-primary.svg')}}" alt="Image"/>
            <img src="{{url('/images/dot-shape-white.svg')}}" alt="Image"/>
        </div>
        <div class="container text-center ">
<div class="row">
<div class="col-xs-9 col-centered" style="margin-top: -105px;">
            <h1 style="    font-size: 38px;
            color: white;
            font-weight: bold;
            font-family: sans-serif;">When you're determined to learn you will find a balance.</h1>
<p style="font-size: 23px;
color: white;
font-family: sans-serif;">A great book by the author Nir Eyal called Hooked. This book is amazing. He talks
    about building Habit Forming Products. Think about it: Habit Forming Products, hooked
    on Instagram, Clubhouse, Gaming, and many others platforms. I just can't get enough
    of it. Why is it that my subconscious is telling me that if I don’t get on it “I’m missing
    something” part of that needing to be in the know!! This tactic of building a product that
    users can’t get enough of is dangerous in a sense so make sure you build something
    great with integrity. Make sure you build something that has a daily purpose!! User
    experience is important because that's one of the first things users, or potential
    customers talk about. People have a short attention span and they want to do things
    fast without any hold up. So figure out a way to give the customer an easy way to
    navigate through your app or website or sass product.</p>
</div>
</div>
        </div>
        <div class="one-img">
            <img src="{{url('/images/dot-shape-white.svg')}}" alt="Image"/>
        </div>
    </div>




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
<div class="w-100 text-center row m-0" style="justify-content:center">



<div class="col-md-4 ">


    <div class="card border box_b">
    <i class="fa-solid fa-comment coment-design"></i>
    <div class="text-center" style="padding-top: 20px">

    <img class="img-circle img-margin " height="110"  width="110" src="{{url('images/black.png')}}" alt="Card image cap">

    <h3>tile img</h3>
</div>
        <div class="card-body card-body-bg" style="padding-bottom: 2px;">
        <div class="star-icon " style="margin: 11px;">

    <p class="t_para">Let's Learn Python kdfaj da dfjakd fds jda fdkal fd alkj afja
        sdfljad fljads fljads fjds flj Fast.
Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque est eveniet, nostrum maiores, fuga ea hic ipsam consectetur placeat natus repellendus reiciendis eligendi recusandae. Est excepturi enim facilis illum voluptatem.
lkk jas  jaf j ad fkj adfjasd fjk
<br>
<div class="star-margin">
    <i class="glyphicon glyphicon-star star_color"></i>
<i class="glyphicon glyphicon-star star_color"></i>
<i class="glyphicon glyphicon-star star_color"></i>
<i class="glyphicon glyphicon-star"></i>
<i class="glyphicon glyphicon-star"></i>
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

    <img class="img-circle img-margin " height="110"  width="110" src="{{url('images/black.png')}}" alt="Card image cap">

    <h3>tile img</h3>
</div>
        <div class="card-body card-body-bg" style="padding-bottom: 2px;">
        <div class="star-icon" style="margin: 11px;">

    <p class="t_para">Let's Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur laudantium magni molestiae excepturi voluptatem deserunt at asperiores rerum ipsa cum dolorum autem possimus sit aspernatur nostrum commodi dolores, harum itaque. Learn Python kdfaj da dfjakd fds jda fdkal fd alkj afja sdfljad fljads fljads fjds flj Fast.


    </p>
    <div class="star-margin">
    <i class="glyphicon glyphicon-star star_color"></i>
<i class="glyphicon glyphicon-star star_color"></i>
<i class="glyphicon glyphicon-star star_color"></i>
<i class="glyphicon glyphicon-star"></i>
<i class="glyphicon glyphicon-star"></i>
</div>
</div>


            </div>
        </div>


</div>


</div>



<div class="next-project">
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
