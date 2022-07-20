@extends('teacher.dashboard-layout')

@section('title', 'My Courses')

@section('content')
    <div class="container-fluid" style="margin-bottom: 15%;">
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


        <div class="row" style="margin-top: 30px; display: flex; justify-content: center;">
            <div class="col-lg-3" style="font-size: 22px;">
                <p><strong>My Blogs</strong></p>
            </div>
        </div>


        <div class="row dashboard-searchbar-bottom-line">
            <div class="col-lg-12" style="border: 1px solid #707070; margin-bottom: 2%"></div>
        </div>

        <div class="row" style="display: flex; justify-content: end; margin-bottom: 4%;">
            <div class="col-lg-3 col-md-3 create_new_btn">
                <div class="col-lg-1 col-md-1">
                    <a href="{{ route('teacher.create-blog') }}"
                       style="background-color: #C9C97E; color: black; border-radius: 3px;
                         padding-top: 5px; padding-bottom: 5px; text-decoration: none;
                         padding-left: 10px; padding-right: 10px; border: none">+</a>
                </div>

                <div class="col-lg-10 pl_0 pr_0">
                    <p style="padding-left: 6px;">Create Blog Post</p>
                </div>
            </div>
        </div>

        <div class="row" style="margin-top: 10px;">
            @if(count($blogs) > 0)
                @foreach($blogs as $blog)
                    <div class="col-lg-4 col-md-4">
                        @php
                            $imagePath = !is_null($blog->blog_cover) ? $blog->blog_cover : 'do_not_delete.png';
                        @endphp
                        <div class="card card-style" style="height: 300px;">
                            <div class="card-header" style="text-align: center">
                                <img src="{{asset('images')."/". $imagePath}}"
                                     class="img-fluid" alt="No Image" width="155">
                            </div>
                            <div class="card-body" style="text-align: center">
                                <p style="margin-top: 15px; font-size: 16px; font-weight: bold;">{{$blog->blog_title}}</p>
                            </div>
                            <div class="card-footer" style="text-align: center">
                                <div class="row" style="display: flex; justify-content: center">
                                    <div class="col-lg-1" style="padding-right: 30px;">
                                        <div class="12" >
                                            <span style="padding-left: 5px;">
                                                <a href="{{ route('teacher.blog.edit', ['blog' => encrypt($blog->id)]) }}"
                                                   style="text-decoration: none">
                                                <i class="fas fa-pen" style="color: #C9C97E"></i>
                                                </a>
                                            </span>
                                        </div>
                                        <div class="12">
                                            <a href="{{ route('teacher.blog.edit', ['blog' => encrypt($blog->id)]) }}"
                                               style="text-decoration: none">
                                                <p style="color: #C9C97E; font-weight: bold">Edit</p>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-1" >
                                        <div class="col-12">
                                            <div style="padding-left: 5px;">
                                                <button type="button" class="userDeleteclass" style="text-decoration: none; border: none"
                                                        blogId="{{$blog->id}}">
                                                    <i class="fas fa-trash" style="color: red"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            {{--                                    <a href="{{ route('teacher.course-delete', ['id' => encrypt($course->id)]) }}"--}}
                                            <button type="button" class="userDeleteclass" style="text-decoration: none; border: none"
                                                    blogId="{{$blog->id}}">
                                                <p style="color: red; font-weight: bold">Delete</p>
                                            </button>
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

    </div>
@endsection

@section('JS')
    <script>
        $('.userDeleteclass').click(function(e) {
            e.preventDefault();
            var user_id = $(this).attr('blogId');
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
                            url: '{{ route('teacher.blog-delete') }}',
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
