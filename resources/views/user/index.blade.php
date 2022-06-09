
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
            <div class="banner_text text-center">
                <h3 class="text-heading">Welcome To Virtually Teaching</h3>
                <h2 class="textbold">The Future Of Online Teaching</h2>
                <button class="btn freeBtn ">Start Free trail</button>
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

        <section class="cardbgcolor">

<div class="container ">
    <div class="row card-margin">
        <div class="col-md-4 col-lg">
            <div class="card border box_b">
                <img class="card-img-top card-img-radius" src="{{url('images/black.png')}}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title card_heading" >Virtual Teaching</h5>
                  <p class="card-text">Let's Learn Python Fast.</p>
                    <div class="row card_section">
                    <div class="col-md-3 mar-top">
                                <i class="fa-solid fa-message icon_prop message-ml"></i>
                            </div>
                        <div class="col-md-3">

                        <i class="fa-solid fa-download icon-size"></i></i> <span class="greyColor">14</span>
                        </div>
                        <div class="col-md-5">
                            <i class="fa-solid fa-clock icon_prop"></i> <span class="greyColor">15 minute</span>
                        </div>
                    </div>
                    </div>
              </div>
        </div>
            <div class="col-md-4 col-lg">
                <div class="card border box_b">
                    <img class="card-img-top card-img-radius" src="{{url('images/black.png')}}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title card_heading" >Virtual Teaching</h5>
                      <p class="card-text">Let's Learn Python Fast.</p>
                        <div class="row card_section">
                            <div class="col-md-3 ">
                                <i class="fa-solid fa-message icon_prop message-ml"></i>
                            </div>
                            <div class="col-md-3">

                                <i class="fa-solid fa-user-group icon_prop" ></i> <span class="greyColor">14</span>
                            </div>
                            <div class="col-md-5">
                                <i class="fa-solid fa-clock icon_prop"></i> <span class="greyColor">15 minute</span>
                            </div>
                        </div>
                        </div>
                  </div>
        </div>
            <div class="col-md-4 col-lg">
                <div class="card border box_b">
                    <img class="card-img-top card-img-radius" src="{{url('images/black.png')}}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title card_heading" >Virtual Teaching</h5>
                      <p class="card-text">Let's Learn Python Fast.</p>
                        <div class="row card_section">
                            <div class="col-md-3 ">
                                <i class="fa-solid fa-message icon_prop message-ml"></i>
                            </div>
                            <div class="col-md-3">

                                <i class="fa-solid fa-user-group icon_prop" ></i> <span class="greyColor">14</span>
                            </div>
                            <div class="col-md-5">
                                <i class="fa-solid fa-clock icon_prop"></i> <span class="greyColor">15 minute</span>
                            </div>
                        </div>
                        </div>
                  </div>
        </div>
    </div>
</div>

</section>

<div class="container">
<div class="row">
<div class="col-md-12">
    <img src="https://olc-wordpress-assets.s3.amazonaws.com/uploads/2020/03/Online-teaching-class-header-1024x561.png" class="img_width" alt="" srcset="">
</div>

</div>

</div>
<div class="dots-div">
<img src="{{url('/images/dot-shape-primary.svg')}}" alt="Image"/>
<img src="{{url('/images/dot-shape-primary.svg')}}" alt="Image"/>
<img src="{{url('/images/dot-shape-primary.svg')}}" alt="Image"/>
</div>
<div class="container">
    <div class="row">
    <div class="col-md-12 text-center">
<h1 class="under-line">
With Virtually Teaching You Can
</h1>

    </div>

    <div class="col-sm-12 box_b vistual-margin">
<div class='virtual-width'>
    <div class='col-md-5'>
        <h2 class="margin-virtual-card">Flexible and Convienient</h2>
<p class="text-design margin-virtual-card">
    Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit.
     Error natus provident, expedita, molestiae adipisci vitae perspiciatis at ipsum, repellat earum assumenda ea. Nesciunt vero sapiente voluptates totam incidunt sit eligendi.
</p>
<a href="#" class="btn btn-bg-color learn-ml">Learn More</a>
    </div>
    <div class='col-md-7'>
        <img src="https://thumbs.dreamstime.com/b/asian-student-boy-video-conference-e-learning-teacher-computer-living-room-home-online-education-internet-social-187311773.jpg" class="img_width-virtual" alt="" srcset="">
    </div>
   
</div>
    </div>
    <img class="card-side-dots-img" src="http://localhost/Teacher-student/public/images/dot-shape-primary.svg" alt="Image">
    </div>

    </div>





    <div class="container">
    <div class="row">
    
        
        <div class="col-md-12 text-center">
    <h1 class="under-line">
    Testimonial
    </h1>
        </div>
    </div>
<div class="row testimonial-margin">
<img class="testimonial-dots" src="http://localhost/Teacher-student/public/images/dot-shape-primary.svg" alt="Image">
<div class="col-md-3 card-ml">


    <div class="card border box_b">
    <i class="fa-solid fa-comment coment-design"></i>
    <div class="text-center" style="padding-top: 20px">
    
    <img class="img-circle img-margin " height="110"  width="110" src="{{url('images/black.png')}}" alt="Card image cap">
   
    <h3>tile img</h3>
</div>
        <div class="card-body card-body-bg">
        <div class="star-icon">

    <p class="t_para">Let's Learn Python kdfaj da dfjakd fds jda fdkal fd alkj afja 
        sdfljad fljads fljads fjds flj Fast.


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
<div class="col-md-3">


    <div class="card border box_b">
    <i class="fa-solid fa-comment coment-design"></i>
    <div class="text-center" style="padding-top: 20px">
    
    <img class="img-circle img-margin " height="110"  width="110" src="{{url('images/black.png')}}" alt="Card image cap">
   
    <h3>tile img</h3>
</div>
        <div class="card-body card-body-bg">
        <div class="star-icon">

    <p class="t_para">Let's Learn Python kdfaj da dfjakd fds jda fdkal fd alkj afja sdfljad fljads fljads fjds flj Fast.


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
