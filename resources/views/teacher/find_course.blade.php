@foreach($find as $course)
    <div class="col-lg-4 col-md-4">
        @php
            $imagePath = explode('.', !is_null($course->course_image) ? $course->course_image : 'do_not_delete.png');
        @endphp
        <div class="card course_card">
            <div class="card-header" style="height: 224px;">
                <img src="{{asset('images')."/". $imagePath[0].".".$imagePath[1]}}"
                     class="img-fluid" alt="No Image" style="width: 100%;height: 100%; object-fit: contain;">
            </div>

            <div class="card-body" style="text-align: center">
                <p style="margin-top: 15px; font-size: 16px; font-weight: bold;">{{$course->course_name}}</p>
            </div>
            <div class="card-footer" style="text-align: center">
                <div class="row" style="margin-top: 10px;">
                    <div class="col-lg-12">
                        <p style="color: #C9C97E; font-size: 12px;">{{ ucwords($course->class->class_name) }} Class</p>
                    </div>
                </div>

                <div class="row" style="display: flex; justify-content: center">
                    <div class="col-lg-1" style="padding-right: 30px;">
                        <div class="12" >
                                            <span style="padding-left: 5px;">
                                                <a href="{{ route('teacher.createCourse.edit', ['createCourse' => encrypt($course->id)]) }}"
                                                   style="text-decoration: none">
                                                <i class="fas fa-pen" style="color: #C9C97E"></i>
                                                </a>
                                            </span>
                        </div>
                        <div class="12">
                            <a href="{{ route('teacher.createCourse.edit', ['createCourse' => encrypt($course->id)]) }}"
                               style="text-decoration: none">
                                <p style="color: #C9C97E; font-weight: bold">Edit</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-1" style="padding-right: 30px;">
                        <div class="col-12">
                                    <span style="padding-left: 5px;">
                                        <a href="{{ route('teacher.course-detail', ['id' => encrypt($course->id)]) }}" style="text-decoration: none; color: black">
                                            <i class="fas fa-eye" style="color: #C9C97E"></i>
                                        </a>
                                    </span>
                        </div>
                        <div class="col-12">
                            <a href="{{ route('teacher.course-detail', ['id' => encrypt($course->id)]) }}" style="text-decoration: none; color: black">
                                <p style="color: #C9C97E; font-weight: bold">View</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-1" >
                        <div class="col-12">
                            <div style="padding-left: 5px;">
                                <button type="button" class="userDeleteclass" style="text-decoration: none; border: none; background: white"
                                        userId="{{$course->id}}">
                                    <i class="fas fa-trash" style="color: red"></i>
                                </button>
                            </div>
                        </div>
                        <div class="col-12">
                            {{--                                    <a href="{{ route('teacher.course-delete', ['id' => encrypt($course->id)]) }}"--}}
                            <button type="button" class="userDeleteclass" style="text-decoration: none; border: none; background: white"
                                    userId="{{$course->id}}">
                                <p style="color: red; font-weight: bold">Delete</p>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
