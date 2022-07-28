<button type="button" onclick="check_alarm()" style="background-color: #2c3250;" class="btn btn-primary res_nav" id="show_nav">
    <i class="fas fa2 fa-bars"></i>
    <i class="fa-solid fa1 fa-xmark"></i>
</button>

<header class="main-header active-header" style="padding: 0px; margin: 0px;">
    <div class="row " style="padding: 0px; margin: 0px;">
        <div class="col-md-3 logo-col" style="padding-top: 10px;">
            <a href="{{ route('teacher.dashboard') }}" style="text-decoration: none">
                <img src="{{url('/images/full-logo.png')}}" alt="Image"
                     style="width: 100px; height: auto"/>
            </a>
        </div>
        <div class="col-md-7 menu-col" style="padding-top: 10px; display: flex; justify-content: center">
            <nav class="navbar navbar-default navbar-expand-lg navbar-light"
                 style="background-color: unset; border: 0px">
                <div class="container-fluid">
                    <div class="container-fluid collapse navbar-collapse" id="myNavbar"
                         style="padding: 0px;">
                        <ul class="nav navbar-nav" style="padding-top: 5px; color: white">
                            <li><a href="{{ url('/about') }}" style="padding-top: 5px;">About Us</a></li>
                            <li><a href="{{ url('/features') }}" style="padding-top: 5px;">Features</a></li>
                            <li><a href="{{ route('teacher.price-menu') }}" style="padding-top: 5px;">Pricing</a></li>
                            <li><a href="{{ route('my-blogs') }}" style="padding-top: 5px;">Blog</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <div class="col-md-2 " style="padding-top: 20px;">
            <div class="col-md-2" style="text-align: center; padding-top: 14px; font-size: 22px;">
                @php
                    $balance = (new App\Models\User())->where('id', auth()->user()->id)
                    ->first('balance');
                @endphp
                <a class="btn btn-secondary"
                        style="color: grey; padding: 5px; cursor: unset;
                        text-align: center; background-color: whitesmoke">
                    {{ '$'.(!empty($balance->balance) ? $balance->balance : ' 0') }}
                </a>
            </div>
            <div class="col-md-10">
                <div class="dropdown">
                    <button class="btn dropdown-toggle nav-img-btn" type="button"
                            data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false" style="background: none">
                        @php
                            $imagePath = explode('.', !is_null(auth()->user()->image) ? auth()->user()->image : 'user-avatar.png');
                        @endphp
                        <img src="{{asset('images')."/". $imagePath[0].".".$imagePath[1]}}" alt="Image" class="show_prof_img"
                             style="color: white; border-radius: 50%;" class="head-user-img" />

                        <span class="caret" style="color: white"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="about-us">
                        <li><a href="{{ route('teacher.upload-profile') }}">My Profile</a></li>
                        <li><a href="{{ url('logout') }}">Logout</a></li>
                    </ul>
                </div>
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
