<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title') | {{env('APP_NAME')}}</title>

        <!-- Fonts -->
{{--        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">--}}
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
{{--        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>--}}
         <link rel="stylesheet" href="{{ asset('css/style.css') }}">
         <link rel="stylesheet" href="{{ asset('css/style4.css') }}">

        <style>
            body{
                font-family: Circular-Loom;
            }
        </style>
    </head>

    <body>
        @include('user.layout.nav')

        <div class="banner-two"></div>

        <div class="tab-sec">
            <div class="row" style="padding-top: 65px; padding-left: 20px;">
                <div class="col-md-4 tab-col">

                    @include('user.layout.sidebar')

                </div>


                <div class="col-md-8 tab-content-col">

                    <div class="tab-content">
                        <div class="tab-pane" id="class"></div>
                        <div class="tab-pane" id="course">Profile Tab.</div>
                        <div class="tab-pane" id="meeting">Messages Tab.</div>
                        <div class="tab-pane" id="teachers">Settings Tab.</div>
                        <div class="tab-pane" id="history">history Tab.</div>
                        <div class="tab-pane" id="notes">Notes Tab.</div>
                        <div class="tab-pane" id="chat">Chat Tab.</div>
                        <div class="tab-pane" id="payment">Payment Tab.</div>
                        <div class="tab-pane" id="#chat-one">Payment Tab.</div>
                        <div class="tab-pane" id="#menu">Payment Tab.</div>
                        <div class="tab-pane active" id="#profile">
                            <h1>DASHBORAD / <span class="span-class"> MY PROFILE</span></h1>

                            <form action="#" class="profile-form">
                                <label for="fname">First name</label><br>
                                <input type="text" id="fname" name="fname"><br>

                                <label for="lname">Last name</label><br>
                                <input type="text" id="lname" name="lname"><br>

                                <label for="email">Email</label><br>
                                <input type="email" id="email" name="email"><br>

                                <label for="subject">Subject</label><br>
                                <select id="Subject" name="carlist" form="carform">
                                    <option value="Subject">Subject</option>
                                </select><br>

                                <label for="pclu-textarea">Bio</label><br>
                                <textarea name="pctextarea" id="pclu-textarea"></textarea>

                                <input type="submit" value="Save">
                            </form>
                        </div>
                        <div class="tab-pane" id="#block">Payment Tab.</div>
                        <div class="tab-pane" id="#status">Payment Tab.</div>
                    </div>

                    <div class="clearfix"></div>

                </div>
            </div>
        </header>
    </body>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins)   Order is important -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        <script src="{{asset('js/custom.js')}}"></script>
</html>
