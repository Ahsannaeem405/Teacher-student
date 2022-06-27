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
                <p><strong>Search History</strong></p>
            </div>
        </div>


        <div class="row dashboard-searchbar-bottom-line">
            <div class="col-lg-11" style="border: 1px solid #707070"></div>
        </div>

        <div class="row" style="margin-bottom: 8%;">
            <div class="col-lg-4">
                <div class="col-12">
                    <div class="card tdb-card">
                        <div class="card-header" >
                            <img src="{{ asset('images/physics.png') }}" width="180">
                        </div>
                        <div class="card-body">
                            <h4><strong>Physics Course</strong></h4>
                            <p>Created on: 1-June-2021</p>
                            <p style="color: #3399FF">Video:5</p>
                            <p style="color: #3399FF">Documents:3</p>
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
                                        <p style="color: #C9C97E; font-weight: bold">Edit</p>
                                    </div>
                                </div>
                                <div class="col-lg-1" style="padding-right: 30px;">
                                    <div class="col-12">
                                        <span style="padding-left: 5px;">
                                            <i class="fas fa-eye" style="color: #C9C97E"></i>
                                        </span>
                                    </div>
                                    <div class="col-12">
                                        <p style="color: #C9C97E; font-weight: bold">View</p>
                                    </div>
                                </div>
                                <div class="col-lg-1" >
                                    <div class="col-12">
                                        <div style="padding-left: 5px;">
                                            <i class="fas fa-trash" style="color: red"></i>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <p style="color: red; font-weight: bold">Delete</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="col-12">
                    <div class="card tdb-card">
                        <div class="card-header" >
                            <img src="{{ asset('images/physics.png') }}" width="180">
                        </div>
                        <div class="card-body">
                            <h4><strong>Physics Course</strong></h4>
                            <p>Created on: 1-June-2021</p>
                            <p style="color: #3399FF">Video:5</p>
                            <p style="color: #3399FF">Documents:3</p>
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
                                        <p style="color: #C9C97E; font-weight: bold">Edit</p>
                                    </div>
                                </div>
                                <div class="col-lg-1" style="padding-right: 30px;">
                                    <div class="col-12">
                                        <span style="padding-left: 5px;">
                                            <i class="fas fa-eye" style="color: #C9C97E"></i>
                                        </span>
                                    </div>
                                    <div class="col-12">
                                        <p style="color: #C9C97E; font-weight: bold">View</p>
                                    </div>
                                </div>
                                <div class="col-lg-1" >
                                    <div class="col-12">
                                        <div style="padding-left: 5px;">
                                            <i class="fas fa-trash" style="color: red"></i>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <p style="color: red; font-weight: bold">Delete</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="col-12">
                    <div class="card tdb-card">
                        <div class="card-header" >
                            <img src="{{ asset('images/physics.png') }}" width="180">
                        </div>
                        <div class="card-body">
                            <h4><strong>Physics Course</strong></h4>
                            <p>Created on: 1-June-2021</p>
                            <p style="color: #3399FF">Video:5</p>
                            <p style="color: #3399FF">Documents:3</p>
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
                                        <p style="color: #C9C97E; font-weight: bold">Edit</p>
                                    </div>
                                </div>
                                <div class="col-lg-1" style="padding-right: 30px;">
                                    <div class="col-12">
                                        <span style="padding-left: 5px;">
                                            <i class="fas fa-eye" style="color: #C9C97E"></i>
                                        </span>
                                    </div>
                                    <div class="col-12">
                                        <p style="color: #C9C97E; font-weight: bold">View</p>
                                    </div>
                                </div>
                                <div class="col-lg-1" >
                                    <div class="col-12">
                                        <div style="padding-left: 5px;">
                                            <i class="fas fa-trash" style="color: red"></i>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <p style="color: red; font-weight: bold">Delete</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" style="margin-bottom: 15%;">
            <div class="col-lg-4">
                <div class="col-12">
                    <div class="card tdb-card">
                        <div class="card-header" >
                            <img src="{{ asset('images/physics.png') }}" width="180">
                        </div>
                        <div class="card-body">
                            <h4><strong>Physics Course</strong></h4>
                            <p>Created on: 1-June-2021</p>
                            <p style="color: #3399FF">Video:5</p>
                            <p style="color: #3399FF">Documents:3</p>
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
                                        <p style="color: #C9C97E; font-weight: bold">Edit</p>
                                    </div>
                                </div>
                                <div class="col-lg-1" style="padding-right: 30px;">
                                    <div class="col-12">
                                        <span style="padding-left: 5px;">
                                            <i class="fas fa-eye" style="color: #C9C97E"></i>
                                        </span>
                                    </div>
                                    <div class="col-12">
                                        <p style="color: #C9C97E; font-weight: bold">View</p>
                                    </div>
                                </div>
                                <div class="col-lg-1" >
                                    <div class="col-12">
                                        <div style="padding-left: 5px;">
                                            <i class="fas fa-trash" style="color: red"></i>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <p style="color: red; font-weight: bold">Delete</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="col-12">
                    <div class="card tdb-card">
                        <div class="card-header" >
                            <img src="{{ asset('images/physics.png') }}" width="180">
                        </div>
                        <div class="card-body">
                            <h4><strong>Physics Course</strong></h4>
                            <p>Created on: 1-June-2021</p>
                            <p style="color: #3399FF">Video:5</p>
                            <p style="color: #3399FF">Documents:3</p>
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
                                        <p style="color: #C9C97E; font-weight: bold">Edit</p>
                                    </div>
                                </div>
                                <div class="col-lg-1" style="padding-right: 30px;">
                                    <div class="col-12">
                                        <span style="padding-left: 5px;">
                                            <i class="fas fa-eye" style="color: #C9C97E"></i>
                                        </span>
                                    </div>
                                    <div class="col-12">
                                        <p style="color: #C9C97E; font-weight: bold">View</p>
                                    </div>
                                </div>
                                <div class="col-lg-1" >
                                    <div class="col-12">
                                        <div style="padding-left: 5px;">
                                            <i class="fas fa-trash" style="color: red"></i>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <p style="color: red; font-weight: bold">Delete</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="col-12">
                    <div class="card tdb-card">
                        <div class="card-header" >
                            <img src="{{ asset('images/physics.png') }}" width="180">
                        </div>
                        <div class="card-body">
                            <h4><strong>Physics Course</strong></h4>
                            <p>Created on: 1-June-2021</p>
                            <p style="color: #3399FF">Video:5</p>
                            <p style="color: #3399FF">Documents:3</p>
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
                                        <p style="color: #C9C97E; font-weight: bold">Edit</p>
                                    </div>
                                </div>

                                <div class="col-lg-1" style="padding-right: 30px;">
                                    <div class="col-12">
                                        <span style="padding-left: 5px;">
                                            <i class="fas fa-eye" style="color: #C9C97E"></i>
                                        </span>
                                    </div>
                                    <div class="col-12">
                                        <p style="color: #C9C97E; font-weight: bold">View</p>
                                    </div>
                                </div>

                                <div class="col-lg-1" >
                                    <div class="col-12">
                                        <div style="padding-left: 5px;">
                                            <i class="fas fa-trash" style="color: red"></i>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <p style="color: red; font-weight: bold">Delete</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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

@section('JS')
    @include('student.layouts.footer')
@endsection
