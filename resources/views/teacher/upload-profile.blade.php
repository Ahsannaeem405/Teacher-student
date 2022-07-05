@extends('teacher.dashboard-layout')

@section('title', 'Upload Profile Photo')

@section('content')
    <div class="container-fluid" >
        <div class="row" style="margin-bottom: 4%;">
            <div class="col-lg-8" style="padding-top: 30px;">
                <h3>MY PROFILE</h3>
            </div>
        </div>

        <div class="row" style="margin-bottom: 2%;">
            <div class="col-lg-8" style="padding-top: 30px;">
                <h4>Upload photo</h4>
            </div>
        </div>

       <form action="{{ route('teacher.profile-update') }}" method="post" enctype="multipart/form-data">
           @csrf
           <div class="row">
               <div class="col-lg-6 profile-image">
                   @php
                       $imagePath = explode('.', !is_null($profile->image) ? $profile->image : 'user-avatar.png');
                   @endphp
                   <img src="{{asset('images')."/". $imagePath[0].".".$imagePath[1]}}" width="60" alt="Image" class="show_prof_img"
                        style="border: 1px solid #dfd5d5"/>


                   <label for="getFile2" style="font-size: 26px; text-decoration: none; color: black">...</label>
                   <input type="file" name="prof_image" id="getFile2" style="visibility: hidden">
               </div>

               <div class="col-lg-6" style="text-align: end;">
                   <img src="{{ asset('images/dt1.png') }}" alt="no image" width="30">
               </div>
           </div>

           <div class="row profile-image-bottom-line" style="">
               <div class="col-lg-11" style="border: 1px solid #707070"></div>
           </div>

           <div class="row profile-input-field">
               <div class="col-lg-6" >
                   <label for="">Name</label>
                   <input type="text" class="form-control" name="name" value="{{ ucfirst($profile->name) }}">
               </div>
           </div>

           <div class="row profile-input-field">
               <div class="col-lg-6">
                   <label for="">Bio</label>
                   <textarea name="bio" id="editor">{{ $profile->bio }}</textarea>
               </div>
           </div>

           <div class="row profile-input-field">
               <div class="col-lg-6" >
                   <label for="">E-mail</label>
                   <input type="email" class="form-control" name="email"
                          value="{{ $profile->email }}">
               </div>
           </div>

           <div class="row profile-input-field">
               <div class="col-lg-6">
                   <label for="">Teacher or Student</label>
                   <select class="form-control" name="role">
                       <option selected>Select</option>
                       <option value="{{ $profile->role }}"{{ ($profile->role == '2') ?
                                                            'selected' : '' }}>Teacher</option>
                       <option value="{{ $profile->role }}"{{ ($profile->role == '3') ?
                                                            'selected' : '' }}>Student</option>
                   </select>
               </div>
           </div>

           <div class="row profile-input-field">
               <div class="col-lg-6" >
                   <label for="">LinkedIn Profile</label>
                   <input type="text" class="form-control" name="linkedIn_prof"
                   value="{{ $profile->linkedin_url }}">
               </div>
           </div>

           <div class="row profile-input-field">
               <div class="col-lg-6" >
                   <label for="">Stripe Secrete Key</label>
                   <input type="text" class="form-control" name="stripe_secret_key"
                          value="{{ (!empty($profile->stripe_secret_key)) ? $profile->stripe_secret_key : '' }}">
               </div>
           </div>

           <div class="row profile-input-field">
               <div class="col-lg-6" >
                   <label for="">Stripe Public Key</label>
                   <input type="text" class="form-control" name="stripe_public_key"
                          value="{{ (!empty($profile->stripe_public_key)) ? $profile->stripe_public_key : '' }}">
               </div>
           </div>

           <div class="row profile-input-field">
               <div class="col-lg-6" >
                   <label for="">E-mail</label>
                   <input type="email" class="form-control" name="email"
                          value="{{ $profile->email }}">
               </div>
           </div>

           <div class="profile-input-field">
               <button type="submit" class="profile-save-btn">Update</button>&nbsp;&nbsp;&nbsp;&nbsp;
               <a href="#" class="profile-draft-btn">Draft</a>
           </div>
       </form>

        <div class="prof-delete-acc">
            <a href="{{ route('teacher.profile-del', ['id' => encrypt($profile->id)]) }}" class="prof-delete-acc-text">Delete your account</a>
        </div>
    </div>
@endsection

@section('JS')
    <script>
        getFile2.onchange = evt => {
            const [file] = getFile2.files
            if (file) {
                console.log(URL.createObjectURL(file));
                $('.show_prof_img').attr('src',URL.createObjectURL(file));
            }
        }
    </script>
@endsection

