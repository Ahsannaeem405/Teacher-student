
@extends('user.layout')
@section('content')
<link rel="stylesheet" href="{{ asset('css/style3.css') }}">
<style>
    .banner{
        position: relative;
    }
    .banner_text{
    position: absolute;
    top: 30%;
font-family: sans-serif;
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

<div class="banner54">
            <div class="banner_text text-center">

                <h2 class="textbold" >Privacy Policy</h2>

            </div>
        </div>
        <section style="margin-top: 15px;" class="cardbgcolor">
<div class="container row_width">

<div class="row row_width">
<div class="col-md-12 padding_4_col padding_4_col2">
<h1 class="trm_h">
Description
</h1>
<p class="main_common_heading">
    What Are privacy policy?
</p>
<p class="common_para">
    1. Privacy policy agreement outlines the website administrator’s rules regarding user behavior and provides information about the actions the website administrator can and will perform.Essentially, your terms and conditions text is a contract between your website and its users. In the event of a legal dispute, arbitrators will look at it to determine whether each party acted within their rights.
</p>

<p class="main_common_heading">
    What Are Privacy policy?
</p>
<p class="common_para">
    2. Privacy policy agreement outlines the website administrator’s rules regarding user behavior and provides information about the actions the website administrator can and will perform.Essentially, your terms and conditions text is a contract between your website and its users. In the event of a legal dispute, arbitrators will look at it to determine whether each party acted within their rights.
</p>

<p class="main_common_heading">
    What Are Privacy policy?
</p>
<p class="common_para">
    3. Privacy policy agreement outlines the website administrator’s rules regarding user behavior and provides information about the actions the website administrator can and will perform.Essentially, your terms and conditions text is a contract between your website and its users. In the event of a legal dispute, arbitrators will look at it to determine whether each party acted within their rights.
</p>

<p class="main_common_heading">
    What Are Privacy policy?
</p>
<p class="common_para">
    4. Privacy policy agreement outlines the website administrator’s rules regarding user behavior and provides information about the actions the website administrator can and will perform.Essentially, your terms and conditions text is a contract between your website and its users. In the event of a legal dispute, arbitrators will look at it to determine whether each party acted within their rights.
</p>
</div>

</div>




</div>
</section>




@endsection
