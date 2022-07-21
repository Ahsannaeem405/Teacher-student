@extends('student.dashboard-layout')

@section('title', 'Meeting')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <div class="container-fluid" style="margin-bottom: 15%;margin-top: 2%;">
      @if (isset($_GET['id']))
        <div class="alert alert-danger border-success" style="font-size: 20px; margin-top: 15px;">
          
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <i class="icofont icofont-close-line-circled"></i>
        </button>
        <strong>Error!</strong>&nbsp;Invaild Zoom Crediential
    </div>
    @endif
       {{--  <a href="{{url('teacher/create_meeting')}}"><i class="fa fa-plus" aria-hidden="true" style="background-color: #c8c97d;padding: 1%;
            border-radius: 50%;
            float: right;
            margin-bottom: 4%;
            margin-top: 1%;"></i></a> --}}

        <div class="row">
            <div class="col-md-12">
                <div class="card tdb-card" style="height: unset!important;padding-top: unset!important;">
                    <div class="row" style="padding-top: 1%;padding-bottom: 1%;">
                        <div class="col-md-1">
                            <strong>#</strong>
                        </div>
                        <div class="col-md-3"><strong><span style="float: left;">Teacher</span></strong>
                        </div>
                        <div class="col-md-2"><strong><span style="float: left;">Topic</span></strong>
                        </div>
                        
                        <div class="col-md-2"><strong><span style="float: left;">Date</span></strong>
                        </div>
                        <div class="col-md-2"><strong><span style="float: left;">Time</span></strong>
                        </div>
                        <div class="col-md-2">
                            <strong><span style="float: left;">Join</span></strong>
                        </div>

                    </div>
                    

                @php $i=0; @endphp    
                @foreach($meet as $row)

                
                @php $i++; @endphp   
                    <div class="card-body" style="height: unset!important;background-color: #eee;">
                        <div class="row" style="padding-top: 1%;padding-bottom: 1%;">
                            <div class="col-md-1" style="line-height: 35px;">
                                {{$i}}
                            </div>
                            <div class="col-md-3"><span style="float: left;line-height: 35px;">{{$row->teacher->name}}</span>
                            </div>
                            <div class="col-md-2"><span style="float: left;line-height: 35px;">{{$row->topic}}</span>
                            </div>
                            <div class="col-md-2"><span style="float: left;line-height: 35px;">{{date("d-m-Y", strtotime($row->date))}}</span>
                            </div>
                            <div class="col-md-2"><span style="float: left;line-height: 35px;">{{date("H:i A", strtotime($row->time))}}</span>
                            </div>
                            <div class="col-md-2">
                                <span style="float: left;line-height: 35px;"><a href="{{$row->url}}"><button class="btn btn-info">Join</button></a></span>
                            </div>

                        </div>
                        
                       
                        
                    
                    </div>
                    
                    @endforeach

                </div>
            </div>
        </div>
       

    </div>
@endsection

@section('JS')
    <script>
        $("#file-upload").change(function(){
            $("#file-name").text(this.files[0].name);
        });

        $("#vid_1").change(function(){
            $("#name_1").text(this.files[0].name);
        });
        $("#vid_2").change(function(){
            $("#name_2").text(this.files[0].name);
        });
        $("#vid_3").change(function(){
            $("#name_3").text(this.files[0].name);
        });
        $("#vid_4").change(function(){
            $("#name_4").text(this.files[0].name);
        });
    </script>
@endsection
