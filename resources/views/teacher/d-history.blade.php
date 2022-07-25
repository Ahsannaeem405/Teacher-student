@extends('teacher.dashboard-layout')

@section('title', 'History')

@section('content')
    <div class="container-fluid" style="margin-bottom: 15%;">
        {{-- <div class="row">
            <div class="col-lg-6 dashborad_haeding" style="padding-left: 80px; padding-top: 30px;">
                <h3>DASHBOARD</h3>
            </div>
            @php
                $records = 0;
            @endphp

            <div class="col-lg-6 search_field_stu" style="padding-top: 50px;">
                <button type="submit" class="search-btn">
                    <img src="{{ asset('images/search-icon.png') }}" alt="no image" width="20">
                </button>

                @if($records == 0)
                    <input type="text" class="search-input" placeholder="" name="search">
                @else
                    <input type="text" class="search-input" placeholder="python coding" name="search">
                @endif
            </div>
        </div> --}}

        <div class="row" style="margin-top: 40px; margin-bottom: 0px; padding-bottom: 0px;">
            <div class="col-lg-12 " style=" margin-bottom: 0px; padding-bottom: 0px;">
                <p class="seatch_his_center text_center" style="text-align: end; font-size: 20px; font-weight: bold">Search History</p>
            </div>

            <div class="col-lg-6" style="text-align: end; padding-top: 8px; margin-bottom: 0px; padding-bottom: 0px;">
                <p></p>
            </div>
        </div>

        <div class="row dashboard-searchbar-bottom-line">
            <div class="col-lg-12" style="border: 1px solid #707070"></div>
        </div>
@foreach($history as $hist)
        <div class="row hist_list_mrgn_btm" style="margin-top: 15px;">
            <div class="col-sm-9">
                <p>{{$hist->history}}</p>
            </div>

            <div class="col-sm-2">
                <p>Date:{!! date('d/M/Y', strtotime($hist->created_at)) !!}</p>
            </div>

            <div class="col-sm-1">
                <a href="#" class="deletehistory" userId="{{$hist->id}}">
                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" style="color: red"
                         stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                         class="css-i6dzq1"><polyline points="3 6 5 6 21 6"></polyline>
                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                        <line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line>
                    </svg>
                </a>
            </div>
        </div>
@endforeach





    </div>

@endsection
@section('JS')

<script>
    $('.deletehistory').click(function(e) {
        e.preventDefault();

        var user_id = $(this).attr('userId');
        swal({
                title: "Are you sure?",
                text: "Do you want to delete Your History?",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        url: '{{URL::to('teacher/history/delete')}}',
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
</script>
@endsection
