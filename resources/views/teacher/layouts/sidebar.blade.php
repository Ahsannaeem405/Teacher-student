<button type="button" onclick="check_alarm2()" style="background-color: #f2f2f2;color:black" class="btn btn-primary res_nav2" id="show_nav">
    <i class="fas fa-bars 3_d"></i>
    <i class="fa-solid fa-xmark krs"></i>
</button>

<div class="side_bar_res col-md-12 tab-col vh-100 p_0" style="padding-top: 20px;">

@if(request()->path() == 'teacher/upload/profile' ||
    request()->path() == 'change/password' ||
    request()->path() == 'teacher.status')

@else
{{--        <img src="{{url('/images/profile.png')}}" alt="Image" class="tab-img"/>--}}

        @php
            $imagePath = explode('.', !is_null(auth()->user()->image) ? auth()->user()->image : 'user-avatar.png');
        @endphp
        <img src="{{asset('images')."/". $imagePath[0].".".$imagePath[1]}}" alt="Image"
             style="color: white; border-radius: 50%;" class="tab-img show_prof_img" />

        <p style="font-size: 22px; ">{{ auth()->user()->name }}</p>
        <h4>{{ (auth()->user()->role == 2) ? '(Teacher)' : ''}}</h4>
        <div>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span style="font-weight: bold">4.8</span>
            <span style="color: #C9C9C9">(22)</span>
        </div>
@endif

@if(request()->route()->getName() == 'teacher.upload-profile' || request()->route()->getName() == 'teacher.status' ||
     request()->route()->getName() == 'teacher.upload-profile' || request()->route()->getName() == 'change-password')
    <ul class="nav-tabs tabs-left sideways"
        style="margin-top: 20px; padding-top: 80px;">
        <li class="{{ request()->routeIs('teacher.upload-profile') ? 'active' : ''}}">
            <a href="{{ route('teacher.upload-profile') }}" style="text-decoration: none">My profile</a>
        </li>
        <li class="{{ request()->routeIs('change-password') ? 'active' : ''}}">
            <a href="{{ route('change-password') }}" style="text-decoration: none">Password</a>
        </li>
        <li class="{{ request()->routeIs('teacher.status') ? 'active' : ''}}">
            <a href="{{ route('teacher.status') }}" style="text-decoration: none">My Status</a>
        </li>
    </ul>

    <div class="sidebar-logout">
        <a href="{{ route('logout') }}">Logout</a>
    </div>

    <div class="" style="text-align: start; margin-top: 80px;">
        <img src="{{ asset('images/dt1.png') }}" alt="no image" width="30">
    </div>
@else
    <ul class="nav-tabs tabs-left sideways" style=" width:100% ; margin-top: 20px;">
        <li class="{{ request()->routeIs('teacher.dashboard') ? 'active' : ''}}">
            <a href="{{ route('teacher.dashboard') }}" style="text-decoration: none">My Class</a></li>

        <li class="{{ request()->routeIs('teacher.create-class') ? 'active' : ''}}">
            <a href="{{ route('teacher.create-class') }}" style="text-decoration: none">Create Class</a></li>

        <li class="{{ request()->routeIs('teacher.my-courses') ? 'active' : ''}}">
            <a href="{{ route('teacher.my-courses') }}" style="text-decoration: none">My Courses</a></li>

        <li class="{{ request()->routeIs('teacher.create-course') ? 'active' : ''}}">
            <a href="{{ route('teacher.create-course') }}" style="text-decoration: none">Create Course</a></li>

        <li class="{{ request()->routeIs('teacher.my-students') ? 'active' : ''}}">
            <a href="{{ route('teacher.my-students') }}" style="text-decoration: none">My Students </a></li>

        <li class="">
            <a href="#" style="text-decoration: none">Join Meeting</a></li>

        <li class="">
            <a href="#" style="text-decoration: none">History</a></li>

        <li class="{{ request()->routeIs('teacher.t-notes') ? 'active' : ''}}">
            <a href="{{ route('teacher.t-notes') }}" style="text-decoration: none">Notes</a></li>

        <li class="{{ request()->routeIs('teacher.chat') ? 'active' : ''}}">
            <a href="{{ route('chat') }}" style="text-decoration: none">Chat</a></li>

        <li class="{{ request()->routeIs('teacher.price-menu') ? 'active' : ''}}">
            <a href="{{ route('teacher.price-menu') }}" style="text-decoration: none">Pricing Menu</a></li>

        <li class="{{ request()->routeIs('teacher.myProfile') ? 'active' : ''}}">
            <a href="{{ route('teacher.upload-profile') }}" style="text-decoration: none">My Profile</a></li>

        <li class="{{ request()->routeIs('teacher.create-blog') ? 'active' : ''}}">
            <a href="{{ route('teacher.blog.store') }}" style="text-decoration: none">Write Blog</a></li>

        <li class="{{ request()->routeIs('teacher.status') ? 'active' : ''}}">
            <a href="{{ route('teacher.status') }}" style="text-decoration: none">My Status</a></li>
    </ul>

    <div class="" style="text-align: start; margin-top: 80px;">
        <img src="{{ asset('images/dt1.png') }}" alt="no image" width="30">
    </div>
@endif
</div>

<script>
    function check_alarm2(){
        $(".side_bar_res").toggle();
        $(".krs").toggle();
        $(".3_d").toggle();
    }
</script>

{{--    <li><a href="#chat" data-toggle="tab">History</a></li>--}}
{{--    <li><a href="#payment" data-toggle="tab">Notes</a></li>--}}
{{--    <li><a href="#chat-one" data-toggle="tab">Chat</a></li>--}}
{{--    <li><a href="#menu" data-toggle="tab">Pricing Menu</a></li>--}}
{{--    <li class="active"><a href="#profile" data-toggle="tab"> My Profile</a></li>--}}
{{--    <li><a href="#block" data-toggle="tab">Write Block</a></li>--}}
{{--    <li><a href="#status" data-toggle="tab">My Status</a></li>--}}

