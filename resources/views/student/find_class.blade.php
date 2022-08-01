@if(count($find) > 0)
    @foreach($find as $class)
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
                        <p style="margin-top: 15px; font-size: 16px; font-weight: bold;">
                            <a href="{{ route('student.my-courses') }}"
                               style="text-decoration: none; color: black">
                                {{$class->class_title}}
                            </a>
                        </p>
                        {{--                                    <h4><strong>{{ ucfirst($class->class_title) }} Class</strong></h4>--}}

                        <p>Created on: {{ date('d-F-Y', strtotime($class->class_date)) }}</p>
                        <p>Time: {{ $class->class_time }}</p>
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
