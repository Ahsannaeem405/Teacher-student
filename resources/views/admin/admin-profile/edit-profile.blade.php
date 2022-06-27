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
            <form action="{{ route('admin.update-profile') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <input type="hidden" name="user_id" id="user_id">
                    <div class="form-group mb-4">
                        <label for="first_name" class="field_label fw-bolder">Name:</label>
                        <input type="text" class="form-control input-field-reg @error('first_name') is-invalid @enderror"
                               name="first_name" required autocomplete="first_name" autofocus
                               id="first_name" >
                        @error('first_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group mb-4">
                        <label for="email" class="field_label fw-bolder">Email:</label>
                        <input type="email" class="form-control input-field-reg @error('email') is-invalid @enderror"
                               name="email" required autocomplete="email" autofocus
                               id="email" >
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="form-group mb-4">
                        <label for="password" class="field_label fw-bolder">Old Password:</label>
                        <input type="password" class="form-control input-field-reg @error('password') is-invalid @enderror"
                               name="password" required
                               id="password" >
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="form-group mb-4">
                        <label for="new_password" class="field_label fw-bolder">New Password:</label>
                        <input type="password" class="form-control input-field-reg @error('new_password') is-invalid @enderror"
                               name="new_password" required autocomplete="new_password" autofocus
                               id="new_password" >
                        @error('new_password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="form-group mb-4">
                        <label for="confirm_password" class="field_label fw-bolder">Confirm Password:</label>
                        <input type="password" class="form-control input-field-reg @error('confirm_password') is-invalid @enderror"
                               name="confirm_password" required autocomplete="confirm_password" autofocus
                               id="confirm_password" >
                        @error('confirm_password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit"  class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>


