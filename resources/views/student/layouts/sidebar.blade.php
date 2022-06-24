<img src="{{url('/images/profile.png')}}" alt="Image" class="tab-img"/>
<p style="font-size: 22px; ">{{ auth()->user()->first_name }}</p>
<h4>{{ (auth()->user()->role == 3) ? '(Student)' : ''}}</h4>

@if(\Request::route()->getName() == 'student.my-profile')
    <ul class="nav-tabs tabs-left sideways" style="margin-top: 20px;">
        <li class="active"><a href="{{ route('student.my-profile') }}">My profile</a></li>
        <li><a href="#" data-toggle="tab">Password</a></li>
        <li><a href="#" data-toggle="tab">My Status</a></li>
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

        <li class="{{ request()->routeIs('student.chat') ? 'active' : '' }}">
            <a href="{{ route('student.chat') }}" style="text-decoration: none">Chat</a></li>

        <li class="{{ request()->routeIs('student.price-menu') ? 'active' : '' }}">
            <a href="{{ route('student.price-menu') }}" style="text-decoration: none">Pricing Menu</a></li>

        <li class="{{ request()->routeIs('student.teacher-timeline') ? 'active' : '' }}">
            <a href="{{ route('student.teacher-timeline') }}" style="text-decoration: none">Teacher Timeline</a></li>
    </ul>

    <div class="" style="text-align: start; margin-top: 80px;">
        <img src="{{ asset('images/dt1.png') }}" alt="no image" width="30">
    </div>
@endif


{{--    <li><a href="#chat" data-toggle="tab">History</a></li>--}}
{{--    <li><a href="#payment" data-toggle="tab">Notes</a></li>--}}
{{--    <li><a href="#chat-one" data-toggle="tab">Chat</a></li>--}}
{{--    <li><a href="#menu" data-toggle="tab">Pricing Menu</a></li>--}}
{{--    <li class="active"><a href="#profile" data-toggle="tab"> My Profile</a></li>--}}
{{--    <li><a href="#block" data-toggle="tab">Write Block</a></li>--}}
{{--    <li><a href="#status" data-toggle="tab">My Status</a></li>--}}

