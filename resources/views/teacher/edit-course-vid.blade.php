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
            <form action="{{ route('teacher.update-lec') }}" method="POST" id="my_form">
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
                        <div class="row">
                            <div class="col-lg-12 text_center">
                                <div class="">
                                    <form action="#"></form>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-5">
                                    <form action="{{ route('teacher.vids-upload') }}" method="post"
                                          enctype="multipart/form-data" class="dropzone" id='vid_1'>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn" id="form_sub"
                            style="background: #C8C97D; color: white">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>





