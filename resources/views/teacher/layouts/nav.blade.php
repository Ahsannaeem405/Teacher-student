<button type="button" onclick="check_alarm()" style="background-color: #2c3250;" class="btn btn-primary res_nav" id="show_nav">
    <i class="fas fa2 fa-bars"></i>
    <i class="fa-solid fa1 fa-xmark"></i>
</button>

<header class="main-header active-header" style="padding: 0px; margin: 0px;">
    <div class="row " style="padding: 0px; margin: 0px;">
        <div class="col-md-3 logo-col" style="padding-top: 15px;">
            <a href="{{ route('teacher.dashboard') }}" style="text-decoration: none">
                <img src="{{url('/images/logo.svg')}}" alt="Image"/>
            </a>
        </div>
        <div class="col-md-7 menu-col" style="padding: 0px; margin: 0px;">
            <nav class="navbar navbar-default navbar-expand-lg navbar-light"
                 style="background-color: unset; border: 0px">
                <div class="container-fluid">
{{--                    <div class="navbar-header">--}}
{{--                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">--}}
{{--                            <span class="icon-bar"></span>--}}
{{--                            <span class="icon-bar"></span>--}}
{{--                            <span class="icon-bar"></span>--}}
{{--                        </button>--}}
{{--                    </div>--}}
                    <div class="container-fluid collapse navbar-collapse" id="myNavbar"
                         style="padding: 0px;">
                        <ul class="nav navbar-nav" style="padding-top: 5px; color: white">
                            <li><a href="#" style="padding-top: 5px;">About Us</a></li>
                            <li><a href="#" style="padding-top: 5px;">Features</a></li>
                            <li><a href="#" style="padding-top: 5px;">Pricing</a></li>
                            <li><a href="#" style="padding-top: 5px;">Blog</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <div class="col-md-2 " style="padding-top: 15px;">
            <div class="dropdown">
                <button class="btn dropdown-toggle nav-img-btn" type="button"
                        data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false" style="background: none">
                    <img src="{{url('/images/607160c7d3be9.png')}}" class="head-user-img" alt="Image"/>
                    <span class="caret" style="color: white"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="about-us">
                    <li><a href="{{ route('teacher.upload-profile') }}">My Profile</a></li>
                    <li><a href="{{ url('logout') }}">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>

<script>

    function check_alarm(){
        $(".main-header").toggle();
        $(".fa1").toggle();
        $(".fa2").toggle();
    }




</script>
