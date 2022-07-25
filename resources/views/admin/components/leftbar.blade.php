<nav class="pcoded-navbar">
    <div class="pcoded-inner-navbar main-menu">
        <div class="pcoded-navigatio-lavel">Dashboard</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                <a href="{{route('admin.dashboard')}}">
                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                    <span class="pcoded-mtext">Dashboard</span>
                </a>
            </li>
        </ul>

        <div class="pcoded-navigatio-lavel">Students</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="pcoded-hasmenu {{ request()->routeIs('admin.student.index') ? 'active' : '' }}">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="feather icon-user"></i></span>
                    <span class="pcoded-mtext">Students</span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="">
                        <a href="{{ route('admin.student.index') }}">
                            <span class="pcoded-mtext">View All</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>

        <div class="pcoded-navigatio-lavel">Teachers</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="pcoded-hasmenu {{ request()->routeIs('admin.teacher.index') ? 'active' : '' }}">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="feather icon-user"></i></span>
                    <span class="pcoded-mtext">Teachers</span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="">
                        <a href="{{route('admin.teacher.index')}}">
                            <span class="pcoded-mtext">View All</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>

        <div class="pcoded-navigatio-lavel">Subscription </div>
        <ul class="pcoded-item pcoded-left-item">
{{--            <li class="pcoded-hasmenu {{ request()->routeIs('admin.get-categories') ? 'active pcoded-trigger' : '' }}">--}}
            <li class="pcoded-hasmenu {{ request()->routeIs('admin.subscriptions') ? 'active' : '' }}">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                    <span class="pcoded-mtext">Subscription </span>
                </a>
                <ul class="pcoded-submenu">
{{--                    <li class="{{ request()->routeIs('admin.get-categories') ? 'active' : '' }}">--}}
                    <li class="">
                        <a href="{{ route('admin.subscriptions') }}">
                            <span class="pcoded-mtext">View all</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>

        <div class="pcoded-navigatio-lavel">Contact</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="pcoded-hasmenu {{ request()->routeIs('admin.contact') ? 'active' : '' }}">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="feather icon-voicemail"></i></span>
                    <span class="pcoded-mtext">Contact</span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="">
                        <a href="{{ route('admin.contact') }}">
                            <span class="pcoded-mtext">View all</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
