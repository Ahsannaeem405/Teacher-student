@if(count($find) > 0)
    @foreach($find as $course)
        <div class="col-lg-4 col-md-4">
            @php
                $imagePath = explode('.', !is_null($course->course_image) ? $course->course_image : 'do_not_delete.png');
            @endphp
            <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
                        transition: 0.3s; padding: 10px;">
                <div class="card-header" style="text-align: center;height:224px;" >
                    <img src="{{asset('images')."/". $imagePath[0].".".$imagePath[1]}}"
                         class="img-fluid" alt="No Image"  style=" width: 100%;height: 100%; object-fit: contain;">
                </div>
                <div class="card-body" style="text-align: center">
                    <p style="margin-top: 15px; font-size: 16px; font-weight: bold;">
                        <a href="{{url('student/course_detail/'.$course->id)}}" style="text-decoration: none; color: black">
                            {{$course->course_name}}
                        </a>
                    </p>
                </div>
                <div class="card-footer" style="text-align: center">
                    <div class="row" style="margin-top: 10px;">
                        <div class="col-lg-12">
                            <p style="color: #C9C97E; font-size: 12px;">{{ ucfirst($course->class->class_name) }} Class</p>
                        </div>
                    </div>
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
