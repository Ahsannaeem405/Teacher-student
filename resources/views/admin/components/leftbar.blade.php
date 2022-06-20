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

        <div class="pcoded-navigatio-lavel">Users</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="feather icon-user"></i></span>
                    <span class="pcoded-mtext">Users</span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="">
                        <a href="{{ route('admin.users') }}">
                            <span class="pcoded-mtext">View All</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>

        <div class="pcoded-navigatio-lavel">Teachers</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="feather icon-user"></i></span>
                    <span class="pcoded-mtext">Teachers</span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="">
                        <a href="{{route('admin.teachers')}}">
                            <span class="pcoded-mtext">View All</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>

        <div class="pcoded-navigatio-lavel">Subscription </div>
        <ul class="pcoded-item pcoded-left-item">
{{--            <li class="pcoded-hasmenu {{ request()->routeIs('admin.get-categories') ? 'active pcoded-trigger' : '' }}">--}}
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                    <span class="pcoded-mtext">Subscription </span>
                </a>
                <ul class="pcoded-submenu">
{{--                    <li class="{{ request()->routeIs('admin.get-categories') ? 'active' : '' }}">--}}
                    <li class="">
                        <a href="#">
                            <span class="pcoded-mtext">View all</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>

        <div class="pcoded-navigatio-lavel">Administration</div>
        <ul class="pcoded-item pcoded-left-item">
{{--            <li class=" {{ request()->routeIs('admin.get-categories') ? 'active' : '' }}">--}}
            <li class="">
                <a href="#">
                    <span class="pcoded-micon"><i class="feather icon-settings"></i></span>
                    <span class="pcoded-mtext">Settings</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
