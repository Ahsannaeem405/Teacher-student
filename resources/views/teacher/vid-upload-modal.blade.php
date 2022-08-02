<div class="modal fade" id="exampleModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <div class="row">
                    <div class="col-lg-12 col-md-12" style="text-align: start;">
                        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12" style="text-align: end;">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                </div>
            </div>
            <form action="{{ route('teacher.course-video') }}" method="POST" id="my_form" enctype="multipart/form-data"
                  >
                @csrf
{{--                <input type="hidden" name="course_type" value="">--}}
                <input type="hidden" name="course_id" value="{{ $course->id }}">
                <input type="hidden" name="course_name" value="{{ $course->course_name }}">

                <div class="modal-body">
                    <div class="form-group">
                        <label for="class_title">Lecture Title</label>
                        <input type="text" name="class_title" id="class_title"
                               class="form-control @error('class_title') is-invalid @enderror"
                               autocomplete="class_title" autofocus   required>
                        @error('class_title')
                        <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>

{{--                    <div class="form-group">--}}
{{--                        <div class="dropzone-inputt" id="drop-div" style="display: none">--}}
{{--                            <label for="course_vid">Drop file here/click to upload</label>--}}
{{--                        </div>--}}
{{--                        <input type="file" id="course_vid" name="course_vid"--}}
{{--                           class="form-control dz-default dz-message--}}
{{--                           @error('course_vid') is-invalid @enderror"--}}
{{--                           autocomplete="course_vid" autofocus--}}
{{--                           style="visibility: hidden; pointer-events: none">--}}
{{--                        @error('course_vid')--}}
{{--                        <span class="invalid-feedback" role="alert">--}}
{{--                           <strong>{{ $message }}</strong>--}}
{{--                        </span>--}}
{{--                        @enderror--}}
{{--                        <label id="file-name"></label>--}}
{{--                        <p>(format: JPG, PNG)</p>--}}
{{--                    </div>--}}
                </div>

                <div class="modal-footer">
                    <button type="submit" id="form_sub"  class="btn" style="background: #C8C97D; color: white">Save</button>
                </div>
            </form>
            <form action="{{ route('teacher.vids-upload') }}" method="post"
                  enctype="multipart/form-data" class="dropzone" id='vid'>
            </form>
        </div>
    </div>
</div>



<div class="modal fade" id="exampleModal2" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <div class="row">
                    <div class="col-lg-12 col-md-12" style="text-align: start;">
                        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12" style="text-align: end;">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                </div>
            </div>
            <form action="{{ route('teacher.course-video') }}" method="POST" id="my_form" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="course_id" value="{{ $course->id }}">
                <input type="hidden" name="course_type" value="live">
                <input type="hidden" name="course_name" value="{{ $course->course_name }}">

                <div class="modal-body">
                    <div class="form-group">
                        <label for="live_class_title">Lecture Title</label>
                        <input type="text" name="class_title" id="live_class_title"
                               class="form-control @error('class_title') is-invalid @enderror"
                               autocomplete="class_title" autofocus
                               >
                        @error('class_title')
                        <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
{{--                    <div class="form-group">--}}
{{--                        <div class="dropzone-inputt" id="live_vid" style="display: none">--}}
{{--                            <label for="course_vid">Drop file here/click to upload</label>--}}
{{--                        </div>--}}
{{--                        <input type="file" id="course_vid" name="course_vid"--}}
{{--                               accept="video/mp4, webm, ogg"--}}
{{--                               class="form-control dz-default dz-message--}}
{{--                               @error('course_vid') is-invalid @enderror"--}}
{{--                               autocomplete="course_vid" autofocus--}}
{{--                               style="visibility: hidden; pointer-events: none">--}}
{{--                        @error('course_vid')--}}
{{--                        <span class="invalid-feedback" role="alert">--}}
{{--                                       <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                        @enderror--}}
{{--                        <label id="file-name"></label>--}}
{{--                        <p>(format: JPG, PNG)</p>--}}
{{--                    </div>--}}
                </div>

                <div class="modal-footer">
                    <button type="submit" id="form_sub" class="btn" style="background: #C8C97D; color: white">Save</button>
                </div>
            </form>

            <form action="{{ route('teacher.vids-upload') }}" method="post"
                  enctype="multipart/form-data" class="dropzone" id='vid_2'>
            </form>
        </div>
    </div>
</div>


