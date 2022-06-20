{{--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Open modal for @mdo</button>--}}

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
            </div>
            <div class="modal-body">
                <form action="#" method="POST">
                    @csrf
                    <div class="form-group mb-4">
                        <label for="first_name" class="field_label fw-bolder">First Name:</label>
                        <input type="text" class="form-control input-field-reg @error('name') is-invalid @enderror"
                               name="first_name" value="first_name" required autocomplete="first_name" autofocus
                               placeholder="Enter First Name" id="first_name" >
                        @error('first_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group mb-4">
                        <label for="last_name" class="field_label fw-bolder">Last Name:</label>
                        <input type="text" class="form-control input-field-reg @error('last_name') is-invalid @enderror"
                               name="last_name" value="last_name" required autocomplete="last_name" autofocus
                               placeholder="Enter Last Name" id="last_name" >
                        @error('last_name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="form-group mb-4">
                        <label for="email" class="field_label fw-bolder">E-mail:</label>
                        <input type="email" class="form-control input-field-reg @error('email') is-invalid @enderror"
                               name="email" value="email" required autocomplete="email" autofocus
                               placeholder="Enter Email" id="email" >
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="form-group mb-4">
                        <label for="role" class="field_label fw-bolder">Role Type:</label>
                        <select name="role" id="role" value="role"
                                class="form-control input-field-reg @error('role') is-invalid @enderror"
                                required autocomplete="role" autofocus>
                            <option selected>Select Role</option>
                            <option value="1">Admin</option>
                            <option value="2">Teacher</option>
                            <option value="3">Student</option>
                        </select>
                        @error('role')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="form-group mb-4">
                        <label for="email" class="field_label fw-bolder">E-mail:</label>
                        <input type="image" class="form-control input-field-reg @error('image') is-invalid @enderror"
                               name="image" value="image" alt="no image" required autocomplete="image" autofocus
                               id="image" >
                        @error('image')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary"
                        data-dismiss="modal">Update</button>
            </div>
        </div>
    </div>
</div>
