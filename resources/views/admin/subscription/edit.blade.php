{{--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Open modal for @mdo</button>--}}

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
            <form action="{{ route('admin.updateSubscription') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group mb-4">
                        <label for="name" class="field_label fw-bolder">Name:</label>
                        <input type="text" class="form-control input-field-reg @error('name') is-invalid @enderror"
                               name="name" required autocomplete="name" autofocus
                               id="name" >
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group mb-4">
                        <label for="price" class="field_label fw-bolder">Price:</label>
                        <input type="text" class="form-control input-field-reg @error('price') is-invalid @enderror"
                               name="price" required autocomplete="price" autofocus
                               id="price" >
                        @error('price')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="form-group mb-4">
                        <label for="starting_date" class="field_label fw-bolder">Starting Date:</label>
                        <input type="date" class="form-control input-field-reg @error('starting_date') is-invalid @enderror"
                               name="starting_date" required autocomplete="starting_date" autofocus
                               id="starting_date" >
                        @error('starting_date')
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


