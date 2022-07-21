@extends('admin.layout')

@section('title', 'My Profile')

@section('content')

    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header">
                                 <div class="card-header d-flex justify-content-between align-items-center">
                        <div>
                            <h3>My Profile</h3>
                        </div>
                         
      
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <label for="name">Name:</label>
                            <input type="text" value="{{$record->first_name}}" id="name" class="form-control">
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-lg-6 col-md-6">
                            <label for="email">Email:</label>
                            <input type="text" value="{{$record->email}}" id="email" class="form-control">
                        </div>
                    </div>
                    
                   


                    <div class="row mt-3">
                        <div class="col-lg-12 col-md-12">
                            <button type="button" class="btn btn-primary"
                                data-toggle="modal" data-target="#exampleModal" onclick="edit(this)"
                                data-user_id="{{$record->id}}" data-first_name="{{$record->first_name}}"
                                data-email="{{$record->email}}">Edit
                            </button>
                            <a href="{{ route('admin.dashboard') }}"
                               class="btn btn-danger">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@include('admin.admin-profile.edit-profile')

@section('JS')
    <script>
        function edit(el) {
            var link = $(el)
            var modal = $("#exampleModal")
            var user_id = link.data('user_id')
            var first_name = link.data('first_name')
            var email = link.data('email')

            modal.find('#user_id').val(user_id);
            modal.find('#first_name').val(first_name);
            modal.find('#email').val(email);
        }

    </script>
@endsection
