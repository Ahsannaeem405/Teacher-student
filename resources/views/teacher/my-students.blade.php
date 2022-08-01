@extends('teacher.dashboard-layout')

@section('title', 'My Students')

@section('content')
    <div class="container-fluid" style="margin-bottom: 15%;">
        <div class="row">
            <div class="col-lg-8 pl_0 text_center" style="padding-top: 30px; padding-left: 0px;">
                <h3>DASHBOARD</h3>
            </div>

{{--            <div class="col-lg-4 text_center" style="padding-top: 50px; text-align: end">--}}
{{--                <button type="submit" class="search-btn">--}}
{{--                    <img src="{{ asset('images/search-icon.png') }}" alt="no image" width="20">--}}
{{--                </button>--}}

{{--                <input type="text" class="search-input" placeholder="python coding" name="search">--}}
{{--            </div>--}}
        </div>

        <div class="text_center" style="padding-top: 20px; text-align: center">
            <h3>My Students</h3>
        </div>


        <div class="row dashboard-searchbar-bottom-line">
            <div class="col-lg-12" style="border: 1px solid #707070"></div>
        </div>

        <div class="row  mystudent_teach ruslt_ser" style="margin-top: 10px;">
            @foreach($cource as $stud)
                <div class="col-lg-3 col-md-3 col-sm-2" style="padding-left: 40px; text-align: center">
                    <div class="col-lg-12">
                        <img src="{{ asset('images/Ellipse 36.png') }}" alt="no image" width="50">
                    </div>
                    <div class="col-lg-12">
                        <span style="margin-top: 15px; font-size: 16px; font-weight: bold;"><a href="#"
                                                                                            style="text-decoration: none; color: black">
                               {{$stud->studentuser->name}}
                            </a>
                        </span>
                        <span style="font-size: 12px;">
                            <p>class: {{$stud->class->class_name}}</p>
                        </span>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="pagini">
            {{ $cource->links() }}
        </div>
{{--        <div class="row" style="margin-top: 30px; margin-right: 40px; display: flex; justify-content: end;">--}}
{{--            <div class="col-lg-1" style="text-align: center; margin-right: -12px;">--}}
{{--                <div style="padding: 5px 5px; background-color: white;--}}
{{--                    color: #C9C97E;border: 1px solid #C9C97E; border-radius: 5px;">1</div>--}}
{{--            </div>--}}

{{--            <div class="col-lg-1" style="text-align: center; margin-right: -12px;">--}}
{{--                <div style="padding: 5px 5px; background-color: #C9C97E;--}}
{{--                    color: white; border: 1px solid #C9C97E; border-radius: 5px;">2</div>--}}
{{--            </div>--}}

{{--            <div class="col-lg-1" style="text-align: center; margin-right: -12px;">--}}
{{--                <div style="padding: 5px 5px; background-color: #C9C97E;--}}
{{--                    color: white; border: 1px solid #C9C97E; border-radius: 5px;">3</div>--}}
{{--            </div>--}}

{{--            <div class="col-lg-1" style="text-align: center; margin-right: -12px;">--}}
{{--                <div style="padding: 5px 5px; background-color: #C9C97E;--}}
{{--                    color: white; border: 1px solid #C9C97E; border-radius: 5px;">4</div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
@endsection

@section('JS')
    <script>
        $(document).ready(function() {
            $(document).on('click', '.search-btn', function() {
                var data=$(".search-input").val();
                $(this).append('<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>');
                $.ajax({
                    url: '{{ url('/teacher/find_student') }}',
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


