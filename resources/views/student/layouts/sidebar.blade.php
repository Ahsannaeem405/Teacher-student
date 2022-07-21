<button type="button" onclick="check_alarm2()" style="background-color: #f2f2f2;color:black" class="btn btn-primary res_nav2" id="show_nav">
    <i class="fas fa-bars 3_d"></i>
    <i class="fa-solid fa-xmark krs"></i>
</button>

<div class="side_bar_res col-md-12 tab-col vh-100 p_0" style="padding-top: 20px;">
    <div class="side_bar_profile" style="align-items: center;">
        @php
            $imagePath = explode('.', !is_null(auth()->user()->image) ? auth()->user()->image : 'user-avatar.png');
        @endphp
        <img src="{{asset('images')."/". $imagePath[0].".".$imagePath[1]}}" alt="Image"
             style="color: white; border-radius: 50%;" class="tab-img show_prof_img" />

        <p style="font-size: 22px; ">{{ auth()->user()->name }}</p>
        <h4>{{ (auth()->user()->role == 3) ? '(Student)' : ''}}</h4>
    </div>

@if(\Request::route()->getName() == 'student.my-profile' || request()->route()->getName() == 'student.change-password'
        || request()->route()->getName() == 'student.my-status')
    <ul class="nav-tabs tabs-left sideways" style="margin-top: 20px;">
        <li class="{{ request()->routeIs('student.my-profile') ? 'active' : ''}}">
            <a href="{{ route('student.my-profile') }}" style="text-decoration: none">My profile</a></li>
        <li class="{{ request()->routeIs('student.change-password') ? 'active' : ''}}">
            <a href="{{ route('student.change-password') }}" style="text-decoration: none">Password</a>
        </li>
        <li class="#">
            <a href="#" style="text-decoration: none">My Status</a>
        </li>
    </ul>

    <div class="sidebar-logout">
        <a href="{{ route('logout') }}">Logout</a>
    </div>

    <div class="" style="text-align: start; margin-top: 80px;">
        <img src="{{ asset('images/dt1.png') }}" alt="no image" width="30">
    </div>
@else
    <ul class="nav-tabs tabs-left sideways" style="margin-top: 20px;">
        <li class="{{ request()->routeIs('student.dashboard') ? 'active' : '' }}">
            <a href="{{ route('student.dashboard') }}" style="text-decoration: none">My Class</a></li>

        <li class="{{ request()->routeIs('student.history') ? 'active' : '' }}">
            <a href="{{ route('student.history') }}" style="text-decoration: none">History</a></li>

        <li class="{{ request()->routeIs('student.notes') ? 'active' : '' }}">
            <a href="{{ route('student.notes') }}" style="text-decoration: none">Notes</a></li>

        <li class="{{ request()->routeIs('chat') ? 'active' : '' }}">
            <a href="{{ route('chat') }}" style="text-decoration: none">Chat</a></li>

        {{-- <li class="{{ request()->routeIs('student.price-menu') ? 'active' : '' }}">
            <a href="{{ route('student.price-menu') }}" style="text-decoration: none">Pricing Menu</a></li> --}}

        <li class="{{ request()->routeIs('student.teacher-timeline') ? 'active' : '' }}">
            <a href="{{ route('student.teacher-timeline') }}" style="text-decoration: none">Teacher Timeline</a></li>
        <li class="{{ request()->routeIs('student.courses') ? 'active' : '' }}">
            <a href="{{ route('student.courses') }}" style="text-decoration: none">Courses</a></li>
        <li class="{{ request()->routeIs('student.my-courses') ? 'active' : '' }}">
            <a href="{{ route('student.my-courses') }}" style="text-decoration: none">My Courses</a></li>
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
