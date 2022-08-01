@extends('teacher.dashboard-layout')

@section('title', 'Notes')

@section('content')
    <div class="container-fluid" style="margin-bottom: 15%;">
        <div class="row">
            <div class="col-lg-10" style=" padding-top: 50px;">
                <div class="row add_new_jus_cen" style="display: flex; justify-content: end">
                    <div class="col-lg-1 col-md-1 add-new-btn">
                        <a href="{{ route('teacher.create-notes') }}">+</a>
                    </div>

                    <div class="col-lg-2 col-md-2">
                        <p style="padding: 0px;">Add New</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8 pl_0 text_center" style="padding-top: 30px; padding-left: 0px;">
                <h3>DASHBOARD</h3>
            </div>

            <div class="col-lg-4 text_center" style="padding-top: 50px; text-align: end">
                <button type="submit" class="search-btn">
                    <img src="{{ asset('images/search-icon.png') }}" alt="no image" width="20">
                </button>

                <input type="text" class="search-input" placeholder="python coding" name="search">
            </div>
        </div>

        <div class="row" style="display: flex; justify-content: center">
            <div class="col-lg-6" style="text-align: center">
                <p style="font-size: 22px"><strong>My Notes</strong></p>
            </div>
        </div>

        <div class="row dashboard-searchbar-bottom-line">
            <div class="col-lg-12" style="border: 1px solid #707070"></div>
        </div>

        @if(count($notes) > 0)
            <div class="row ruslt_ser">
                @foreach($notes as $note)
                    <div class="col-lg-4" style="margin-bottom: 20px;">
                        <div class="col-lg-12 col-md-12 notes_resp_mrgn" style="background-color: #F9C660;
                     padding: 20px; margin-bottom: 20px;">
                            <a href="{{ route('teacher.delete-notes', ['id' => encrypt($note->id)]) }}" class="btn btn-xs btn-danger"> <i class='fa fa-trash'></i></a>
                            <a href="{{url('teacher/edit_note/'.$note->id)}}" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i> </a>
                            <h3 style="text-align: center">{{$note->title}}</h3>
                            <div class="posted_note" style="background-color: #F9C660;">
                                <p style="text-align: center; margin-top: 30px; background-color: #F9C660;">
                                    {!! $note->note_description !!}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div style="text-align: center; font-size: 24px">
{{--                <i class="fa-solid fa-folder-open"></i>--}}
                <p>No notes found...</p>
            </div>
        @endif
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
                            url: '{{URL::to('teacher/delete_note')}}',
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
                    url: '{{ url('/teacher/find_notes') }}',
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
