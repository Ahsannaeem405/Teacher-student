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
    img{
        border-radius: 5% 5% 0% 0%;
    }
    .card-title{
        color: #C9C97E;
        font-size: 15px;
        font-weight: 500;
        margin-left: 20px;
    }
    .greyColor{
        color: rgb(165, 163, 163)
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
    background: rgb(221, 218, 218);
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
<section class="cardbgcolor">

<div class="container ">
    <div class="row">
        <div class="col-md-4 col-lg">
            <div class="card border">
                <img class="card-img-top" src="{{url('images/black.png')}}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Virtual Teaching</h5>
                  <p class="card-text">Let's Learn Python Fast.</p>
                    <div class="row card_section">
                        <div class="col-md-4 ml-2">
                            <i class="fa-solid fa-message"></i>
                        </div>
                        <div class="col-md-4">
                            
                            <i class="fa-solid fa-user-group"></i> <span class="greyColor">14</span> 
                        </div>
                        <div class="col-md-4">
                            <i class="fa-solid fa-clock"></i> <span class="greyColor">15 minute</span> 
                        </div>
                    </div>
                    </div>
              </div>
        </div>
            <div class="col-md-4 col-lg">
                <div class="card border">
                    <img class="card-img-top" src="{{url('images/black.png')}}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Virtual Teaching</h5>
                      <p class="card-text">Let's Learn Python Fast.</p>
                        <div class="row card_section">
                            <div class="col-md-4 ml-2">
                                <i class="fa-solid fa-message"></i>
                            </div>
                            <div class="col-md-4">
                                
                                <i class="fa-solid fa-user-group"></i> <span class="greyColor">14</span> 
                            </div>
                            <div class="col-md-4">
                                <i class="fa-solid fa-clock"></i> <span class="greyColor">15 minute</span> 
                            </div>
                        </div>
                        </div>
                  </div>
        </div>
            <div class="col-md-4 col-lg">
                <div class="card border">
                    <img class="card-img-top" src="{{url('images/black.png')}}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Virtual Teaching</h5>
                      <p class="card-text">Let's Learn Python Fast.</p>
                        <div class="row card_section">
                            <div class="col-md-4 ml-2">
                                <i class="fa-solid fa-message"></i>
                            </div>
                            <div class="col-md-4">
                                
                                <i class="fa-solid fa-user-group"></i> <span class="greyColor">14</span> 
                            </div>
                            <div class="col-md-4">
                                <i class="fa-solid fa-clock"></i> <span class="greyColor">15 minute</span> 
                            </div>
                        </div>
                        </div>
                  </div>
        </div>
    </div>
</div>

</section>
<div class="select-sec">
    <div class="container">
        <h2>SELECT THE PAYMENT OPTION AND CONTINUE</h2>
        <div class="row col-middle">
            <div class="col-md-7 form-col">
                <div class="row">
                    <form action="" id="payment_form">
                        <ul class="payment-form-row">
                            <li id="border_pay">
                                <input type="radio" id="html" name="payment_method" value="pay_pal">
                                <label for="html"><img src="{{url('/images/pay.png')}}" alt="Image"/></label>
                            </li>
                            <li id="border_visa">
                                <input type="radio" id="html" name="payment_method" value="Visa">
                                <label for="html"><img src="{{url('/images/visanew.png')}}" alt="Image"/></label>
                            </li>
                        </ul>
                        <label for="email" class="mt-5"><h3>PayPal E-mail </h3></label><br>
                        <input type="email" id="email" name="email">
                        <input type="submit" value="Pay Now">
                    </form>
                    <p>(You will be redirected to official payment gateway page)</p>
                </div>
            </div>
            <div class="col-md-5 order-sum-col">
                <h2>ORDER SUMMERY</h2>
                <div class="row basic-sec mb-4">
                    <div class="col-md-6">
                        <h3>Basic Plan</h3>
                    </div>
                    <div class="col-md-6">
                         <span>$10 / Month</span>
                    </div>
                </div>
                <h3>Plane Details</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vitae purus in enim dictum congue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer</p>
                <ul class="footer-link">
                    <li><i class="fa fa-check-circle-o" aria-hidden="true"></i>&nbsp; Watch your video anytime at your leisure</li>
                    <li><i class="fa fa-check-circle-o" aria-hidden="true"></i>&nbsp; Get 50 videos per month for $10 a month</li>
                    <li><i class="fa fa-check-circle-o" aria-hidden="true"></i>&nbsp; Watch videos anytime at your leisure</li>
                    <li><i class="fa fa-check-circle-o" aria-hidden="true"></i>&nbsp; Share your videos with you social media</li>
                </ul>
            </div>
        </div>
        <div class="back-to-sec">
            <h4>Back To Payment Option</h4>
            <hr>
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
