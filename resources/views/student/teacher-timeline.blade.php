@extends('student.dashboard-layout')

@section('title', 'Teacher Timeline')

@section('content')
<div class="container-fluid" style="margin-bottom: 50px;">
    <div class="row" style="margin-bottom: 2%;">
        <div class="col-lg-8" style="padding-top: 30px;">
            <h3>DASHBOARD / <span style="color: #C9C97E">TEACHER TIMELINE</span></h3>
        </div>
    </div>

    <div class="row" style="margin-bottom: 8%;">
        <div class="col-lg-4">
            <div class="col-12">
                <select name="cars" class="form-control top-select-timeline">
                    <option value="volvo">Subject</option>
                    <option value="saab">Saab</option>
                    <option value="opel">Opel</option>
                    <option value="audi">Audi</option>
                </select>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="col-12">
                <select name="cars" class="form-control top-select-timeline">
                    <option value="volvo">Rating</option>
                    <option value="saab">Saab</option>
                    <option value="opel">Opel</option>
                    <option value="audi">Audi</option>
                </select>
            </div>
        </div>

        <div class="row">
            @foreach($teachers as $teacher)
            <div class="col-sm-4 col-md-4 col-lg-4">
                <div class="col-12">
                    <div class="card mt-5 " >
                        <img src="{{url('/images/teacher-pic1.png')}}" width="260"
                             style="background-size: cover" alt="Image"/>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h4><strong>{{$teacher->first_name}} {{$teacher->last_name}}</strong></h4>
                                    <h5><span class="section3-span" style="color: #C9C9C9"><strong>Technology</strong></span></h5>
                                </div>
                                <div class="col-sm-6 text-right" style="padding-top: 8px;">
                                    <i class="fa fa-star" style="color: #C9C97E"></i>
                                    <span class="section3-span1">4.8</span>   <span class="section3-span2">(22)</span>
                                </div>
                            </div>
                            <div class="col-sm-6 text-right" style="padding-top: 8px;">
                                <i class="fa fa-star" style="color: #C9C97E"></i>
                                <span class="section3-span1">4.8</span> <span class="section3-span2">(22)</span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <p class="h4 card-text pt-3">I have been teaching biology for 15 years
                                    and I have a PHD in Biology. I want to give my students a modern
                                    approach to learning the field.</p>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <div class="icon">
                            <div class="row">
                                <div class="col-sm-4">
                                    <i class="fa fa-thumbs-up"></i>
                                    <span class="heading-span3">(200)</span>
                                </div>
                                <div class="col-sm-8 ">
                                    <i class="fa fa-comment"></i>
                                    <i class="fa fa-message-middle"></i>
                                    <span class="heading-span3">(30)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endforeach
{{ $teachers->links() }}       
        </div>
    </div>
</div>
@endsection

@section('JS')
@include('student.layouts.footer')
@endsection