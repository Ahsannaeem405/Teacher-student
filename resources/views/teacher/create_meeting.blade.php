@extends('teacher.dashboard-layout')

@section('title', 'Create Meeting')

@section('content')
    <div class="container-fluid" style="margin-bottom: 15%;">
        <div class="row" style="margin-bottom: 6%;">
            <div class="col-lg-8 text_center" style="padding-top: 30px;">
                <h3>MY CLASS  / <span style="color: #C9C97E">CREATE NEW CLASS</span></h3>
            </div>
        </div>

        <form action="{{ url('teacher/save_meeting') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            

            <div class="row" style="margin-bottom: 3%;">
                <div class="col-lg-6 col-md-6">
                    <label for="">Topic</label>
                    <input type="text" class="form-control @error('topic') is-invalid @enderror"
                           name="topic" required autocomplete="class_title" autofocus
                           placeholder="Enter Topic">
                    @error('topic')
                    <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row" style="margin-bottom: 3%;">
                <div class="col-lg-6 col-md-6">
                    <label for="class_name">Meeting Type</label>
                    <input type="text" name="type" id="class_name" class="form-control
                        @error('type') is-invalid @enderror" autocomplete="class_name"
                        autofocus required placeholder="Enter Meeting Type">
                    @error('type')
                        <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    {{--                    <input type="text" name="note_name" class="form-control">--}}
                </div>
            </div>

            <div class="col-lg-4">
                <div>
                    <label for="">Date</label>
                </div>
                <button type="submit" class="course-search-btn" style="cursor: unset">
                </button>

                <input type="date" class="search-input @error('date') is-invalid @enderror"
                       autocomplete="class_date" autofocus
                       pattern="\d{4}-\d{2}-\d{2}"
                       name="date" required>
                @error('date')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="col-lg-8" style="margin-bottom: 3%;">
                <div>
                    <label for="">Time</label>
                </div>
                <button type="submit" class="course-time-btn" style="cursor: unset">
                    <i class="fa-solid fa-clock"></i>
                </button>

                <input type="time" class="search-input @error('class_time') is-invalid @enderror"
                       autocomplete="class_time" autofocus
                       name="time" required>
                @error('time')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>



            

           

            <div class="row">
                <div class="col-lg-12">
                    <div class="" style="text-align: center">
                        <button type="submit" class="profile-save-btn">Create</button>&nbsp;&nbsp;&nbsp;&nbsp;
                        {{-- <a href="#" class="profile-draft-btn">Cancel</a> --}}
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('JS')
    <script>
        $("#file-upload").change(function(){
            $("#file-name").text(this.files[0].name);
        });
    </script>
@endsection
