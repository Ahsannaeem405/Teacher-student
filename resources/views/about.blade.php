
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

<div class="banner">
            <div class="banner_text text-center">

            </div>
        </div>
        <section style="margin-top: 15px;" class="cardbgcolor">
<div class="container">

<div class="row">
<div class="col-md-12">
<h1>
About Us
</h1>
<p class="about_p">
Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium illo perferendis error eius, aliquid vero consequuntur deleniti similique hic vel, fuga veniam quibusdam nesciunt fugiat quasi pariatur tenetur laborum beatae. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quaerat odit tenetur nulla eveniet voluptatum deserunt doloribus, voluptatem quo, iure modi voluptates error. Corporis natus modi illum pariatur sunt magni sed!. Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque eos blanditiis, corporis ipsam dicta quod! Error eum voluptate voluptatum corporis, harum sapiente natus itaque quibusdam repellendus? Quasi rem optio excepturi?
</p>
</div>

<div class="col-md-12">
<img src="https://thumbs.dreamstime.com/z/excess-duties-female-assistant-does-massage-to-her-boss-personal-assistant-does-massage-to-her-boss-155386022.jpg"  class="img_ab" alt="" srcset="">
</div>

</div>




</div>
</section>







@endsection
