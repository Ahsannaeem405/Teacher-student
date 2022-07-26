<div class="modal fade" id="exampleModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <div class="row">
                    <div class="col-lg-6 col-md-6" style="text-align: start; padding-left: 30px">
                        <h5 class="modal-title" id="exampleModalLabel"><strong>Write Blog</strong></h5>
                    </div>

{{--                    <div class="col-lg-6 col-md-6" style="text-align: end;">--}}
{{--                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                            <span aria-hidden="true">&times;</span>--}}
{{--                        </button>--}}
{{--                    </div>--}}
                </div>

{{--                <div class="row">--}}
{{--                    <div class="col-lg-12 col-md-12" style="text-align: end;">--}}
{{--                        --}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
            <form action="{{ route('blog-create') }}" method="POST">
                @csrf
                <div class="modal-body" style="margin-top: 40px;">
                    @if(!auth()->user())
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email"
                                   class="form-control @error('email') is-invalid @enderror"
                                   autocomplete="email" autofocus required>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    @endif

                    <div class="form-group">
                        <label for="blog_title">Blog Title</label>
                        <input type="text" name="blog_title" id="blog_title"
                               class="form-control @error('blog_title') is-invalid @enderror"
                               autocomplete="blog_title" autofocus required>
                        @error('blog_title')
                            <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="course_vid">Blog Description</label>
                        <textarea name="blog_description"
                            class="form-control @error('blog_description') is-invalid @enderror"
                                  autocomplete="blog_description" autofocus></textarea>
                        @error('blog_description')
                        <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <label id="file-name"></label>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit"  class="btn" style="background: #C8C97D; color: white">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
