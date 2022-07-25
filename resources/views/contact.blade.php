@extends('user.layout')

@section('content')

<script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>

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

<div class="banner56">

</div>


<img class="header-dots-img" src="http://localhost/Teacher-student/public/images/dot-shape-primary.svg" alt="Image">


<div class="container">
    <div class="row w-100 m-0">
        <div class="col-md-12 box_additional" style="margin-bottom: 5%">
            <div class="text-center">
                <h1 class="heading_contact">Contact Us</h1>
            </div>
            <div class="box_b bx">
                <div class="con">
                    <form action="{{ route('contact') }}" method="POST" class="profile-form">
                        @csrf
                        <label for="fname">Name</label><br>
                        <input type="text" id="fname" name="name" placeholder="Enter Your Name"
                               class="cont_sub_f @error('name') is-invalid @enderror"
                               autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback alert alert-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        <br>

                        <label for="email">Email</label><br>
                        <input type="text" id="email" placeholder="Enter Your Email" name="email"
                        class="cont_sub_f @error('email') is-invalid @enderror"
                        autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback alert alert-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <br>

                        <label for="subject">Subject</label><br>
                        <input type="text" id="subject" placeholder="Enter Your Subject" name="subject"
                        class="cont_sub_f @error('subject') is-invalid @enderror"
                        autocomplete="subject" autofocus>
                        @error('subject')
                            <span class="invalid-feedback alert alert-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <br>

                        <label for="pclu-textarea">Describe Your Message</label><br>
                        <textarea name="pctextarea" id="pclu-textarea"></textarea>

                        <div class="text-center btn_uper">
                            <input type="submit" value="Send">
                            <input type="submit" class="contact_cancel" value="Cancel">
                        </div>
                    </form>
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


<script>
    ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .then( editor => {
                    console.log( editor );
            } )
            .catch( error => {
                    console.error( error );
            } );
</script>


@endsection
