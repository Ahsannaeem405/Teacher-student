@extends('student.dashboard-layout')

@section('title', 'Notes')

@section('content')
<div class="container-fluid" style="margin-bottom: 15%;">
    <div class="row">
        <div class="col-lg-12" style="display: flex; justify-content: end;
             padding-top: 20px;">
            <div class="col-lg-3" style="padding-top: 0px;">
                <div class="row justify_md_cen" style="">
                    <div class="col-lg-3 col-md-3 add-new-btn ">
                        <a href="{{ route('student.create-notes') }}">+</a>
                    </div>

                    <div class="col-lg-5 col-md-5">
                        <p style="padding: 0px;">Add New</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8 dashborad_haeding" style="padding-top: 30px;">
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
            <p style="font-size: 22px; margin-top:30px"><strong>My Notes</strong></p>
        </div>
    </div>

    <div class="row dashboard-searchbar-bottom-line">
        <div class="col-lg-12" style="border: 1px solid #707070"></div>
    </div>

    <div class="row ruslt_ser">
        @if(count($notes) > 0)
            @foreach($notes as $note)
                <div class="col-lg-4" style="margin-bottom: 20px;">
                    <div class="col-lg-12 col-md-12 notes_resp_mrgn" style="background-color: #F9C660;
                         padding: 20px; margin-bottom: 20px;">
                        <button type="button" class="btn btn-xs btn-danger userDeletenote" userId="{{$note->id}}"> <i class='fa fa-trash'></i></button>
                        <a href="{{url('student/edit_note/'.$note->id)}}" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i> </a>
                        <h3 style="text-align: center">{{$note->title}}</h3>
                        <div class="posted_note">
                            <p style="text-align: center; margin-top: 30px;">
                                @php
                                    $note_descrip = $note->note_description;
                                    $break = 40;
                                @endphp
                                {!! implode(PHP_EOL, str_split($note_descrip, $break)) !!}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div style="text-align: center; font-size: 24px">
                <i class="fa-solid fa-folder-open"></i>
                <p>No record found...</p>
            </div>
        @endif
    </div>

    <div class="pagini">
        {{ $notes->links() }}
    </div>
</div>
@endsection

@section('JS')
<script>
    $('.userDeletenote').click(function(e) {
        e.preventDefault();
        var user_id = $(this).attr('userId');
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
                        url: '{{URL::to('student/delete_note')}}',
                        type: 'get',
                        data: {
                            'user_id': user_id
                        },
                        success: function(result) {
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


    $(document).ready(function() {
        $(document).on('keyup', '.search-input', function() {
            var data=$(".search-input").val();
            $(this).append('<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>');
            $.ajax({
                url: '{{ url('/student/find_notes') }}',
                data: {
                    data
                },
                type: 'post',
                success: function(result) {
                    $(".ruslt_ser").empty();
                    $(".ruslt_ser").append(result);
                }
            });
        });
    });
</script>
@endsection
