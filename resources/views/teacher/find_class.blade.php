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
    <div style="text-align: center; font-size: 24px">
        <i class="fa-solid fa-folder-open"></i>
        <p>No record found...</p>
    </div>
@endif
