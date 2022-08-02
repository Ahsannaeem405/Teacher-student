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
   .pagination a {
    border-radius: unset!important;
    margin: unset!important;
   }
</style>

<div class="banner53">
            <div class="banner_text text-center">
                <h3 class="text-heading" style="font-weight: lighter">Write and share your content</h3>
                <h2 class="textbold">Read and extend technical knowledge</h2>

{{--                @if(auth()->user())--}}
{{--                    --}}
{{--                @else--}}
{{--                    <a href="{{ url('/login') }}" class="btn freeBtn " >Write a Blog</a><br>--}}
{{--                @endif--}}
                <a href="#" data-toggle="modal" data-target="#exampleModal"
                   class="btn freeBtn " >Write a Blog</a><br>

                <a href="{{ (auth()->user() == null) ? url('/login') : ''}}" class="btn freeBtn comb_btn">Post Content</a>
            </div>
</div>







<div class="row row_width">
    <div class="col-xs-2 text-center"></div>
<div class="col-xs-9 text-center">
<h1 style="font-size: 100px;color:#f0f0f0;opacity:54%; font-family: sans-serif;font-weight: bold">
BLOG
</h1>
</div>
<div class="col-xs-1" style="text-align: right;padding-right: 0;">
    <img class="header-dots-img" style="opacity: 50%;" src="{{ asset('/images/dt1.png') }}" alt="Image">
</div>
</div>










































        <section style="margin-top: 15px;" class="cardbgcolor">
            <div class="container row_width">
        <div style="row row_width" >
        <div class="col-sm-4">
            <div class="pp">
                @if(auth()->user())
                    @if(auth()->user()->role == '2')
                        <a href="{{ url('teacher/dashboard') }}" class="b_heading_b" style="
                font-size: 23px;"> < Back</a>
                    @else
                        <a href="{{ url('student/dashboard') }}" class="b_heading_b" style="
                font-size: 23px;">
                    @endif
                @else
                    <a href="{{ url('/') }}" class="b_heading_b" style="
                font-size: 23px;"> < Back</a>
                @endif
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
                @if(auth()->user())
                    @if(auth()->user()->role == '2')
                        <a href="{{ url('/teacher/create/blog') }}" style="text-decoration: none; color: black">
                            <i class="glyphicon  glyp">+</i>
                            <span class="b_side_he next_he box_b">Add New</span>
                        </a>
                    @endif
                @else
{{--                    <a href="{{ url('/login') }}" style="text-decoration: none; color: black">--}}
{{--                        <i class="glyphicon  glyp">+</i>--}}
{{--                        <span class="b_side_he next_he box_b">Add New</span>--}}
{{--                    </a>--}}
                @endif
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
                        <img class="img_side" src="{{ asset('images/dot-shape-primary.svg') }}" alt="Image">
                    </div>
                </div>
            </div>


    <section style="margin-top: 24px;" class="cardbgcolor">
        <div class="container row_width">

      <div class="row row_width m-0">
        <div class="col-md-8 " >
            <div style="position:relative">
                <div class="pos_l">
                    <img class="img_side" src="{{ asset('images/dot-shape-primary.svg') }}" alt="Image">
                </div>
            </div>
            @if(isset($blogs) && count($blogs) > 0)
                @foreach($blogs as $blog)
                    <div class="box_b p_con " style="position: relative;">
                        <div class="demo_b">Demo</div>
                        @php
                            $imagePath = !is_null($blog->blog_cover) ? $blog->blog_cover : 'do_not_delete.png';
                        @endphp
                        <img src="{{asset('images')."/". $imagePath }}"
                             class="img_width" alt="No Image"
                             style="width: 180px; border-top-left-radius: 5px; border-top-right-radius: 5px;">
                        {{--    <img class="img_width c_w" src="{{ asset('images/33.png') }}"  alt="" srcset="">--}}

                        <a href="{{ route('blog-detail', ['id' => encrypt($blog->id)]) }}" style="text-decoration: none;">
                            <h3 class="bLog_b_head common_blog_color">{{ $blog->blog_title }}</h3>
                        </a>
                        <h4 class="b_heading_b">{{ date('d-F-Y', strtotime($blog->created_at)) }}</h4>

                        <h3 class="r_m_space">{!! $blog->blog_description !!}</h3>
                        <div class=" r_m_space">
                            <h4><a href="{{ route('blog-detail', ['id' => encrypt($blog->id)]) }}" class="b_heading_b">Read more</a></h4>
                        </div>
                    </div>
                @endforeach
        </div>

          <div class="col-md-4">
              <div class="col-sm-12" style="background-color:#f2f0f0">
                  <h3 class="text-center common_blog_color" style="    font-size: 31px;font-family: sans-serif !important;">
                      Recent articles
                  </h3>

                  @foreach($recents as $recent)
                      @php
                          $imagePath = !is_null($recent->blog_cover) ? $recent->blog_cover : 'do_not_delete.png';
                      @endphp
                      <div class="row pt_b">
                          <div class="col-sm-5" style="    padding: 0;">
                              <img class="img_blog_side" src="{{asset('images')."/". $imagePath }}" alt="No Image">
                              {{--                        <img class="img_blog_side" src="{{ asset('images/34.png') }}" class="img_blog_side" alt="" srcset="">--}}
                          </div>
                          <div class="col-sm-7">
                              <a href="{{ url('/login') }}" style="text-decoration: none">
                                  <h4 class="b_side_he">
                                      {{ $recent->blog_title }}
                                  </h4>
                              </a>
                              <p>
                                  {!! Str::words($recent->blog_description, 40, ' ...') !!}
                              </p>
                              <p class="b_heading_b">
                                  {{ date('d-F-Y', strtotime($recent->created_at)) }}
                              </p>
                          </div>
                      </div>
                  @endforeach
            @else
                  <div style="padding-right: 70px; margin-bottom: 20%">
                      <p style="text-align: end; font-size: 22px;">
                          <strong>No record found...</strong></p>
                  </div>
            @endif
            </div>
        </div>
         </section>


<div class="pagini">
    {{ (isset($blogs) && count($blogs) > 0) ? $blogs->links() : '' }}
</div>

{{--<div class="pagi_mtMb">--}}
{{--    <nav>--}}
{{--        <ul class="pagination">--}}
{{--        --}}{{--  <li>--}}
{{--        <a href="#" aria-label="Previous">--}}
{{--        <span aria-hidden="true">&laquo;</span>--}}
{{--        </a>--}}
{{--        </li>  --}}
{{--        <li class="active" style="display: none"><a href="#">1</a></li>--}}
{{--        <li><a href="#" class="activate">1</a></li>--}}
{{--        <li><a href="#" class="pagi_style">2</a></li>--}}
{{--        <li><a href="#" class="pagi_style">3</a></li>--}}
{{--        <li><a href="#" class="pagi_style">4</a></li>--}}
{{--        <li class="active" style="display: none"><a href="#">1</a></li>--}}
{{--        --}}{{--  <li>--}}
{{--        <a href="#" aria-label="Next">--}}
{{--        <span aria-hidden="true">&raquo;</span>--}}
{{--        </a>--}}
{{--        </li>  --}}
{{--        </ul>--}}
{{--        </nav>--}}
{{--</div>--}}








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
                    <a href="{{ url('register/here') }}" class="footer-bannar-learn-more">Learn More <img src="{{url('/images/arrow.png')}}" alt="Image"/></a>
                    <a href="{{ url('register/here') }}" class="footer-bannar-join-us">Join With Us!</a>
                </div>
            </div>
            <div class="one-img">
                <img src="{{url('/images/dot-shape-white.svg')}}" alt="Image"/>
            </div>
        </div>

@include('write-blog-model')
@endsection
