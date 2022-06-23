<img src="{{url('/images/profile.png')}}" alt="Image" class="tab-img"/>
<p style="font-size: 22px; ">{{ auth()->user()->first_name }}</p>
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

@if(\Request::route()->getName() == 'teacher.my-profile')
    <ul class="nav-tabs tabs-left sideways" style="margin-top: 20px;">
        <li class="active"><a href="#">My profile</a></li>
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
        <li class="">
            <a href="#" style="text-decoration: none">My Class</a></li>

        <li class="">
            <a href="{{ route('teacher.create-course') }}" style="text-decoration: none">Create Class</a></li>

        <li class="">
            <a href="#" style="text-decoration: none">My Courses</a></li>

        <li class="">
            <a href="#" style="text-decoration: none">Create Course</a></li>

        <li class="">
            <a href="#" style="text-decoration: none">My Students </a></li>

        <li class="">
            <a href="#" style="text-decoration: none">Join Meeting</a></li>

        <li class="">
            <a href="#" style="text-decoration: none">History</a></li>

        <li class="">
            <a href="#" style="text-decoration: none">Notes</a></li>

        <li class="">
            <a href="#" style="text-decoration: none">Chat</a></li>

        <li class="">
            <a href="#" style="text-decoration: none">Pricing Menu</a></li>

        <li class="">
            <a href="#" style="text-decoration: none">My Profile</a></li>

        <li class="">
            <a href="#" style="text-decoration: none">Write Blog</a></li>

        <li class="">
            <a href="#" style="text-decoration: none">My Status</a></li>
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

