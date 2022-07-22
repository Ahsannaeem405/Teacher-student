<div class="modal fade" id="editVidModal" role="dialog">
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
            <form action="{{ route('teacher.update-lec') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="course_id" id="lecture_id">
                <input type="hidden" name="course_name" id="course_name">

                <div class="modal-body">
                    <div class="form-group">
                        <label for="class_title">Lecture Title</label>
                        <input type="text" name="class_title" id="class_title"
                               class="form-control @error('class_title') is-invalid @enderror"
                               autocomplete="class_title" autofocus>
                        @error('class_title')
                        <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label for="course_vid">Upload Lecture</label>
                        <input type="file" id="course_vid" name="course_vid"
                               accept="video/mp4, webm, ogg"
                               class="form-control @error('course_vid') is-invalid @enderror"
                               autocomplete="course_vid" autofocus>
                        @error('course_vid')
                        <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <label id="file-name"></label>
{{--                        <p>(format: JPG, PNG)</p>--}}
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit"  class="btn" style="background: #C8C97D; color: white">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>





