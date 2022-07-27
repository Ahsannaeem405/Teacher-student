@extends('teacher.dashboard-layout')

@section('title', 'Dashboard')

@section('content')
    <div class="container-fluid" style="margin-bottom: 15%;">
        <div class="row">
            <div class="col-lg-8 pl_0 text_center" style="padding-top: 30px; padding-left: 0px;">
                <h3>DASHBOARD</h3>
            </div>

            <div class="col-lg-4 text_center" style="padding-top: 50px; text-align: end">
                <input type="text" class="search-input" placeholder="python coding" name="search">
                <button type="button" class="search-btn" style="border-radius: 0px 10px 10px 0px !important">
                    <img src="{{ asset('images/search-icon.png') }}" alt="no image" width="20">
                </button>
            </div>
        </div>

        <div class="row" style="margin-top: 30px; display: flex; justify-content: center;">
            <div class="col-lg-3" style="padding: 0px; margin: 0px; font-size: 22px;">
                <p><strong>My Classes</strong></p>
            </div>
        </div>


        <div class="row dashboard-searchbar-bottom-line">
            <div class="col-lg-12" style="border: 1px solid #707070"></div>
        </div>

        <div class="row ruslt_ser" style="margin-bottom: 8%;">
            @if(count($classes) > 0)
                @foreach($classes as $class)
                    <div class="col-lg-4">
                        <div class="col-12">
                            <div class="card tdb-card">
                                <div class="card-header" style="height: 224px;">
                                    @php
                                        $imagePath = explode('.', !is_null($class->class_image) ? $class->class_image : 'do_not_delete.png');
                                    @endphp
                                    <img src="{{asset('images')."/". $imagePath[0].".".$imagePath[1]}}"
                                         class="img-fluid" alt="No Image" style=" width: 100%;height: 100%; object-fit: contain;">
                                </div>
                                <div class="card-body">
                                    <h4><strong>{{ ucfirst($class->class_title) }}</strong></h4>

                                    <p>Created on: {{ date('d-F-Y', strtotime($class->class_date)) }}</p>
                                    <p>Time: {{ $class->class_time }}</p>
                                </div>
                                <div class="card-footer">
                                    <div class="row" style="display: flex; justify-content: center">
                                        <div class="col-lg-1" style="padding-right: 30px;">
                                            <div class="12" >
                                            <span style="padding-left: 5px;">
                                                <a href="{{ route('teacher.createClass.edit', ['createClass' => encrypt($class->id)]) }}"
                                                   style="text-decoration: none">
                                                <i class="fas fa-pen" style="color: #C9C97E"></i>
                                                </a>
                                            </span>
                                            </div>
                                            <div class="12">
                                                <a href="{{ route('teacher.createClass.edit', ['createClass' => encrypt($class->id)]) }}"
                                                   style="text-decoration: none">
                                                    <p style="color: #C9C97E; font-weight: bold">Edit</p>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-1" style="padding-right: 30px;">
                                            <div class="col-12">
                                            <span style="padding-left: 5px;">
                                                <a href="{{ route('teacher.createClass.show', ['createClass' => encrypt($class->id)]) }}" style="text-decoration: none">
                                                    <i class="fas fa-eye" style="color: #C9C97E"></i>
                                                </a>
                                            </span>
                                            </div>
                                            <div class="col-12">
                                                <a href="{{ route('teacher.createClass.show', ['createClass' => encrypt($class->id)]) }}" style="text-decoration: none">
                                                    <p style="color: #C9C97E; font-weight: bold">View</p>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-1" >
                                            <div class="col-12">
                                                <div style="padding-left: 5px;">
                                                    <button type="button" class="userDeleteclass" style="text-decoration: none; border: none; background: white"
                                                            userId="{{$class->id}}">
                                                        <i class="fas fa-trash" style="color: red"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button type="button" class="userDeleteclass" style="text-decoration: none; border: none; background: white"
                                                        userId="{{$class->id}}">
                                                    <p style="color: red; font-weight: bold">Delete</p>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <h4 class="text_center">No class found...</h4>
            @endif
        </div>

        <div class="pagini">
            {{ $classes->links() }}
        </div>
    </div>
@endsection

@section('JS')
    <script>
        $('.userDeleteclass').click(function(e) {
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
                            url: '{{ route('teacher.createClass-del') }}',
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
            $(document).on('click', '.search-btn', function() {
                var data=$(".search-input").val();
                $(this).append('<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>');
                //alert(data);
                $.ajax({
                        url: '{{ url('/teacher/find_class') }}',
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

