@extends('student.dashboard-layout')

@section('title', 'Notes')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css" integrity="sha384-zIaWifL2YFF1qaDiAo0JFgsmasocJ/rqu7LKYH8CoBEXqGbb9eO+Xi3s6fQhgFWM" crossorigin="anonymous">
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
                <button type="button" class="btn btn-xs btn-danger userDeletenote" userId="{{$note->id}}" > <i class='fa fa-trash'></i></button>
                <a href="{{url('student/edit_note/'.$note->id)}}" class="btn btn-xs btn-primary" ><i class="fa fa-pencil"></i> </a>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
  $('.userDeletenote').click(function(e){
            e.preventDefault();
           var user_id= $(this).attr('userId');
// alert(user_id);
            swal({
                title: "Are you sure?",
                text: "Do you want to delete this note?",
                icon: "warning",
                buttons: true,
                dangerMode: true,
                })
            .then((willDelete) => {
                if (willDelete) {
                      $.ajax({
                        url:'{{URL::to('student/delete_note')}}',
                        type:'get',
                        data:{
                            'user_id':user_id
                        },
                        success:function(result)
                        {
                        swal(result.success, {
                         icon: "success",
                         })
                         .then((result) => {
                           location.reload();
                        });
                        // window.reload();
                         }
                    });
                        // admin/deleteuser
                }
            });
        });
        </script>
@endsection
