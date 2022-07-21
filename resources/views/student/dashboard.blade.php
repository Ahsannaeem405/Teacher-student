@extends('student.dashboard-layout')

@section('title', 'Dashboard')

@section('content')
    <div class="container-fluid pl_0" style="margin-bottom: 15%;">
        <div class="row" style="padding-bottom: 4%">
            <div class="col-lg-8 pl_0" style="padding-top: 30px;">
                <h3>DASHBOARD</h3>
            </div>
            @php
                $records = 1;
            @endphp

            <div class="col-lg-4" style="padding-top: 50px;">
                <button type="submit" class="search-btn">
                    <img src="{{ asset('images/search-icon.png') }}" alt="no image" width="20">
                </button>

                @if($records == 0)
                    <input type="text" class="search-input search-margin" placeholder="" name="search">
                @else
                    <input type="text" class="search-input" placeholder="python coding" name="search">
                @endif
            </div>
        </div>

        @if($records != 0)
            <div class="row dashboard-searchbar-bottom-line">
                <div class="col-lg-12" style="border: 1px solid #707070"></div>
            </div>
        @endif

        @if($records == 0)
            <div style="padding-top: 20px; text-align: center">
                <h3>My Classes</h3>
            </div>
        @endif

        @if($records != 0)
            <div class="row ruslt_ser" style="margin-top: 10px;">
                @if(count($classes) > 0)
                    @foreach($classes as $class)
                    @php
                        $imagePath = explode('.', !is_null($class->class->class_image) ? $class->class->class_image : 'do_not_delete.png');
                    @endphp
                    <div class="col-lg-4">
                        <div class="col-12">
                            <div class="card tdb-card">
                                <div class="card-header" style="height: 224px;">
                                    @php
                                        $imagePath = explode('.', !is_null($class->class->class_image) ? $class->class->class_image : 'do_not_delete.png');
                                    @endphp
                                    <img src="{{asset('images')."/". $imagePath[0].".".$imagePath[1]}}"
                                         class="img-fluid" alt="No Image" style=" width: 100%;height: 100%; object-fit: contain;">
                                </div>
                                <div class="card-body">
                                    <p style="margin-top: 15px; font-size: 16px; font-weight: bold;">
                                        <a href="{{ route('student.my-courses') }}"
                                           style="text-decoration: none; color: black">
                                            {{$class->class->class_title}}
                                        </a>
                                    </p>
{{--                                    <h4><strong>{{ ucfirst($class->class_title) }} Class</strong></h4>--}}

                                    <p>Created on: {{ date('d-F-Y', strtotime($class->class->class_date)) }}</p>
                                    <p>Time: {{ $class->class->class_time }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                @else
                    <h4 class="text_center">No class found...</h4>
                @endif
            </div>
        @endif
    </div>

    <div class="pagini">
        {{ $classes->links() }}
    </div>

@endsection

@section('JS')
    <script>
        $(document).ready(function() {
            $(document).on('click', '.search-btn', function() {
                var data=$(".search-input").val();
                $(this).append('<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>');
                $.ajax({
                    url: '{{ url('/student/find_class') }}',
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



