@extends('student.dashboard-layout')

@section('title', 'Notes')

@section('content')
    <div class="container-fluid" style="margin-bottom: 15%;">
         <div class="row">
             <div class="col-lg-12" style="display: flex; justify-content: end;
             padding-top: 50px;">
             <div class="row">
                <div class="col-lg-10" style=" padding-top: 50px;">
                    <div class="row" style="display: flex; justify-content: end">
                        <div class="col-lg-1 col-md-1 add-new-btn">
                            <a href="{{url('student/notes/create')}}">+</a>
                        </div>

                        <div class="col-lg-2 col-md-2">
                            <p style="padding: 0px;">Add New</p>
                        </div>
                    </div>
                </div>
            </div>
             </div>
         </div>

        <div class="row">
            <div class="col-lg-8" style="padding-left: 80px; padding-top: 30px;">
                <h3>DASHBOARD</h3>
            </div>
            @php
                $records = 0;
            @endphp

            <div class="col-lg-4" style="padding-top: 50px;">
                <button type="submit" class="search-btn">
                    <img src="{{ asset('images/search-icon.png') }}" alt="no image" width="20">
                </button>

                @if($records == 0)
                    <input type="text" class="search-input" placeholder="" name="search">
                @else
                    <input type="text" class="search-input" placeholder="python coding" name="search">
                @endif
            </div>
        </div>

        <div class="row" style="display: flex; justify-content: center">
            <div class="col-lg-6" style="text-align: center">
                <p style="font-size: 22px">My Notes</p>
            </div>
        </div>

        <div class="row dashboard-searchbar-bottom-line">
            <div class="col-lg-12" style="border: 1px solid #707070"></div>
        </div>

        <div class="row">
            @foreach($notes as $note)
            <div class="col-lg-4" style="margin-bottom: 20px;">
                <div class="col-lg-12 col-md-12 notes_resp_mrgn" style="background-color: #F9C660;
                 padding: 20px; margin-bottom: 20px;">
                    <h3 style="text-align: center">{{$note->title}}</h3>
                    <p style="text-align: center; margin-top: 30px;">
                        {!!$note->note_description!!}
                    </p>
                </div>
            </div>
@endforeach
           
        </div>




    </div>
@endsection

@section('JS')
    @include('student.layouts.footer')
@endsection
