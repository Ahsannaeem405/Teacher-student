@extends('teacher.dashboard-layout')

@section('title', 'Dashboard')

@section('content')
    <div class="container-fluid" style="margin-bottom: 15%;">
        <div class="row">
            <div class="col-lg-6" style="padding-left: 80px; padding-top: 30px;">
                <h3>DASHBOARD</h3>
            </div>

            <div class="col-lg-6" style="padding-top: 50px;">
                <button type="submit" class="search-btn">
                    <img src="{{ asset('images/search-icon.png') }}" alt="no image" width="20">
                </button>

                <input type="text" class="search-input" placeholder="python coding" name="search">
            </div>
        </div>

        <div class="row" style="margin-top: 30px; display: flex; justify-content: center;">
            <div class="col-lg-3" style="padding: 0px; margin: 0px; font-size: 22px;">
                <p><strong>My Classes</strong></p>
            </div>
        </div>


        <div class="row dashboard-searchbar-bottom-line">
            <div class="col-lg-11" style="border: 1px solid #707070"></div>
        </div>

        <div class="row" style="margin-bottom: 8%;">
            @if(count($classes) > 0)
                @foreach($classes as $class)
                    <div class="col-lg-4">
                        <div class="col-12">
                            <div class="card tdb-card">
                                <div class="card-header" >
                                    @php
                                        $imagePath = explode('.', !is_null($class->class_image) ? $class->class_image : 'do_not_delete.png');
                                    @endphp
                                    <img src="{{asset('images')."/". $imagePath[0].".".$imagePath[1]}}"
                                         class="img-fluid" alt="No Image" width="200">
                                </div>
                                <div class="card-body">
                                    <h4><strong>{{ ucfirst($class->class_name) }} Class</strong></h4>

                                    <p>Created on: {{ date('d-F-Y', strtotime($class->class_date)) }}</p>
                                    <p>Time: {{ $class->class_time }}</p>
                                </div>
                                <div class="card-footer">
                                    <div class="row" style="display: flex; justify-content: center">
                                        <div class="col-lg-1" style="padding-right: 30px;">
                                            <div class="12" >
                                            <span style="padding-left: 5px;">
                                                <i class="fas fa-pen" style="color: #C9C97E"></i>
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
                                                <i class="fas fa-eye" style="color: #C9C97E"></i>
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
                                                    <i class="fas fa-trash" style="color: red"></i>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <a href="{{ route('teacher.createClass-del', ['id' => encrypt($class->id)]) }}"
                                                   style="text-decoration: none">
                                                    <p style="color: red; font-weight: bold">Delete</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <h4>No class found...</h4>
            @endif
        </div>

        <div class="row" style="margin-top: 30px; margin-right: 40px; display: flex; justify-content: end;">
            <div class="col-lg-1" style="text-align: center; margin-right: -12px;">
                <div style="padding: 5px 5px; background-color: white;
                    color: #C9C97E;border: 1px solid #C9C97E; border-radius: 5px;">1</div>
            </div>

            <div class="col-lg-1" style="text-align: center; margin-right: -12px;">
                <div style="padding: 5px 5px; background-color: #C9C97E;
                    color: white; border: 1px solid #C9C97E; border-radius: 5px;">2</div>
            </div>

            <div class="col-lg-1" style="text-align: center; margin-right: -12px;">
                <div style="padding: 5px 5px; background-color: #C9C97E;
                    color: white; border: 1px solid #C9C97E; border-radius: 5px;">3</div>
            </div>

            <div class="col-lg-1" style="text-align: center; margin-right: -12px;">
                <div style="padding: 5px 5px; background-color: #C9C97E;
                    color: white; border: 1px solid #C9C97E; border-radius: 5px;">4</div>
            </div>
        </div>
    </div>
@endsection

