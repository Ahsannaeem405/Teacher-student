@php
   if(Auth::user()->role == '2') {
      $layoutDirectory = 'teacher.dashboard-layout';
   }else {
      $layoutDirectory = 'student.dashboard-layout';
   }
@endphp

@extends($layoutDirectory)

@section('title', 'Chat')

@section('content')
<script src="https://js.pusher.com/7.1/pusher.min.js"></script>
  <script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('8a1e92ef48c2e9760e62', {
      cluster: 'ap2'
    });

    var channel = pusher.subscribe('Techer_student');
    channel.bind('Notification', function(data) {
        //var datay=JSON.stringify(data);
        var role=data['role'];
        var id = [{{Auth::user()->id}}, data['id'] ];

        if (id.includes(data['msg'].from_id)  || id.includes(data['msg'].to_id) ) {
            if(data['role'] == '2')
            {
                $(".chat").append(`<div class="std-chat" style="margin-bottom: 3%">

                    <span>
                         ${data['name']}&nbsp;&nbsp;
                    </span>

                    <img src="${data['public_img']}" alt="Image" width="40"
                         style="border-radius: 50%"/>

                    <p style="background-color: #EEEEEE;width: fit-content; padding: 1% 5%;border-radius:27px;margin-left: auto;">${data['msg'].message}</p>
                    <i class="fa-solid fa-clock" style="color: grey"></i>${data['date']}&nbsp;&nbsp;
                </div>`);

            }
            else{






               $(".chat").append(`<div class="teach-chat" style="margin-bottom: 3%">


                                <img src="${data['public_img']}" alt="Image" width="40"
                                     style="border-radius: 50%"/>

                                <span>
                                    ${data['name']} &nbsp;&nbsp;
                                </span>

                                <p style="background-color:#EEEEEE;width: fit-content; padding: 1% 5%;border-radius: 27px;">${data['msg'].message}</p>
                                <i class="fa-solid fa-clock" style="color: grey"></i>&nbsp;&nbsp;${data['date']}
                            </div>`);
            }
        }
    });
  </script>
    <div class="container-fluid" style="margin-bottom: 15%;">
        <div class="row">
            <div class="col-lg-12 pl_0" style="padding-left: 80px; padding-top: 30px;">
                <h3>DASHBOARD</h3>
            </div>
        </div>

        <div class="row" style="display: flex; justify-content: center">
            <div class="col-lg-6" style="text-align: center">
                <p style="font-size: 22px; font-weight: bold">Chat</p>
            </div>
        </div>

        <div class="row dashboard-searchbar-bottom-line">
            <div class="col-lg-12" style="border: 1px solid #707070"></div>
        </div>

        {{-- <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="">
                    @if(auth()->user()->role == '2')
                        <span>
                           <i class="fa-solid fa-magnifying-glass"
                              style="color: #C9C97E; font-size: 20px;"></i>
                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Teachers&nbsp;
                           <i class="fa-solid fa-caret-down"></i>
                    </span>

                    @elseif(auth()->user()->role == '3')
                        <span>
                           <i class="fa-solid fa-magnifying-glass"
                              style="color: #C9C97E; font-size: 20px;"></i>
                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Students&nbsp;
                           <i class="fa-solid fa-caret-down"></i>
                        </span>
                    @endif
                </div>
            </div>
        </div> --}}
      @if(isset($users) && count($users) > 0)
        <div class="row teacher_chat ">
            <div class="col-lg-5 left_list">
                @foreach($users as $user)
                    <div style="border: 1px solid #cfcaca;
                     ">
                        @php
                            $image = !is_null($user->image) ? $user->image : 'user-avatar.png';
                        @endphp
                        <div class="row teacher_chat tech_list">
                            <div class="col-lg-12" style="padding-top: 10px;">
                               <div class="row" style="margin-left: 0px;">
                                <div class="col-lg-1 col-xs-2"><img src="{{asset('images')."/". $image}}" alt="Image"
                                style="border-radius: 50%"/></div>
                                <div class="col-lg-11 col-xs-10">





                                @if(auth()->user()->id == '2')
                                    <a href="{{ route('chat', ['id' => encrypt($user->id)]) }}" style="text-decoration: none">
                                        <p style="margin-bottom:unset!important;"><strong>{{ $user->name }}</strong></p>
                                    </a>
                                @else
                                    <a href="{{ route('chat', ['id' => encrypt($user->id)]) }}" style="text-decoration: none">
                                        <p style="margin-bottom:unset!important;"><strong>{{ $user->name }}</strong></p>
                                    </a>
                                @endif
                                <p style="color: grey">Start Conv...</p>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            @if(request()->has('id'))
                <div class="col-lg-6 right_part" style="border: 1px solid lightgrey">
                    <div class="chat" style="min-height:490px;max-height: 500px;padding-top: 2%;
                        overflow: auto;">
                    @foreach($messages as $message)
                        @if($message->student->role == '2')
                            <div class="std-chat" style="margin-bottom: 3%">
                                @php
                                    $image = !is_null($message->get_user->image) ? $message->get_user->image : 'user-avatar.png';
                                @endphp
                                <span>
                                    {{ ucfirst($message->get_user->name) }} &nbsp;&nbsp;
                                </span>

                                <img src="{{asset('images')."/". $image}}" alt="Image" width="40"
                                     style="border-radius: 50%"/>

                                <p style="background-color: #EEEEEE;width: fit-content; padding: 1% 5%;border-radius:27px;margin-left: auto;">{!! $message->message !!}</p>
                                <i class="fa-solid fa-clock" style="color: grey"></i>&nbsp;&nbsp;{{ date('Y-m-d H:i A', strtotime($message->created_at)) }}
                            </div>
                        @else
                            <div class="teach-chat" style="margin-bottom: 3%">
                                @php
                                    $image = !is_null($message->get_user->image) ? $message->get_user->image : 'user-avatar.png';
                                @endphp

                                <img src="{{asset('images')."/". $image}}" alt="Image" width="40"
                                     style="border-radius: 50%"/>

                                <span>
                                    {{ucfirst($message->get_user->name) }} &nbsp;&nbsp;
                                </span>

                                <p style="background-color:#EEEEEE;width: fit-content; padding: 1% 5%;border-radius: 27px;">{{$message->message }}</p>
                                <i class="fa-solid fa-clock" style="color: grey"></i>&nbsp;&nbsp;{{ date('Y-m-d H:i A', strtotime($message->created_at)) }}
                            </div>
                        @endif
                    @endforeach
                    </div>
                    <div class="row " style="padding-bottom: 2%;">

                    <form enctype="multipart/form-data" id="my_form">
                        <input type="hidden" name="user_id" id="user_id" value="{{ request()->get('id') }}" />

                            <div class="col-lg-9 col-xs-9" style="text-align: end; padding-right: 0px;">
                                <input type="text" id="chat_msg" name="chat_msg"  class="form-control get_chat" style="height: 40px;">
                            </div>

                            <div class="col-lg-3 col-xs-3" style="padding-left: 0px;">
                                <button type="submit" class="chat-send-btn" id="send">
                                    <i class="fa fa-paper-plane"
                                       style="color: white; font-size: 14px;"></i>&nbsp;&nbsp;&nbsp;Send
                                </button>
                            </div>
                    </form>
                    </div>
                </div>
            @else

            @endif
        </div>
      @else
        <div class="row teacher_chat ">
                <div class="col-lg-5 left_list">
{{--                    @foreach($users as $user)--}}
                        <div style="border: 1px solid #cfcaca;">
{{--                            @php--}}
{{--                                $image = !is_null($user->image) ? $user->image : 'user-avatar.png';--}}
{{--                            @endphp--}}
                            <div class="row teacher_chat tech_list">
                                <div class="col-lg-12" style="padding-top: 10px;">
                                    <div class="row" style="margin-left: 0px;">
{{--                                        <div class="col-lg-1 col-xs-2"><img src="{{asset('images')."/". $image}}" alt="Image"--}}
{{--                                                                            style="border-radius: 50%"/></div>--}}
                                        <div class="col-lg-11 col-xs-10">
{{--                                            @if(auth()->user()->id == '2')--}}
{{--                                                <a href="{{ route('chat', ['id' => encrypt($user->id)]) }}" style="text-decoration: none">--}}
{{--                                                    <p style="margin-bottom:unset!important;"><strong>{{ $user->name }}</strong></p>--}}
{{--                                                </a>--}}
{{--                                            @else--}}
{{--                                                <a href="{{ route('chat', ['id' => encrypt($user->id)]) }}" style="text-decoration: none">--}}
{{--                                                    <p style="margin-bottom:unset!important;"><strong>{{ $user->name }}</strong></p>--}}
{{--                                                </a>--}}
{{--                                            @endif--}}
                                            <p style="color: grey">Start Conv...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
{{--                    @endforeach--}}
                </div>

{{--                @if(request()->has('id'))--}}
                    <div class="col-lg-6 right_part" style="border: 1px solid lightgrey">
                        <div class="chat" style="min-height:490px;max-height: 500px;padding-top: 2%;
                        overflow: auto;">
{{--                            @foreach($messages as $message)--}}
{{--                                @if($message->student->role == '2')--}}
                                    <div class="std-chat" style="margin-bottom: 3%">
{{--                                        @php--}}
{{--                                            $image = !is_null($message->get_user->image) ? $message->get_user->image : 'user-avatar.png';--}}
{{--                                        @endphp--}}
                                        <span>
{{--                                    {{ ucfirst($message->get_user->name) }} &nbsp;&nbsp;--}}
                                        </span>

{{--                                        <img src="{{asset('images')."/". $image}}" alt="Image" width="40"--}}
{{--                                             style="border-radius: 50%"/>--}}

{{--                                        <p style="background-color: #EEEEEE;width: fit-content; padding: 1% 5%;border-radius:27px;margin-left: auto;">{!! $message->message !!}</p>--}}
{{--                                        <i class="fa-solid fa-clock" style="color: grey"></i>&nbsp;&nbsp;{{ date('Y-m-d H:i A', strtotime($message->created_at)) }}--}}
                                    </div>
{{--                                @else--}}
                                    <div class="teach-chat" style="margin-bottom: 3%">
{{--                                        @php--}}
{{--                                            $image = !is_null($message->get_user->image) ? $message->get_user->image : 'user-avatar.png';--}}
{{--                                        @endphp--}}

{{--                                        <img src="{{asset('images')."/". $image}}" alt="Image" width="40"--}}
{{--                                             style="border-radius: 50%"/>--}}

                                        <span>
{{--                                    {{ucfirst($message->get_user->name) }} &nbsp;&nbsp;--}}
                                        </span>

{{--                                        <p style="background-color:#EEEEEE;width: fit-content; padding: 1% 5%;border-radius: 27px;">{{$message->message }}</p>--}}
{{--                                        <i class="fa-solid fa-clock" style="color: grey"></i>&nbsp;&nbsp;{{ date('Y-m-d H:i A', strtotime($message->created_at)) }}--}}
                                    </div>
{{--                                @endif--}}
{{--                            @endforeach--}}
                        </div>
                        <div class="row " style="padding-bottom: 2%;">

                            <form >
{{--                                <input type="hidden" name="user_id" id="user_id" value="" />--}}

                                <div class="col-lg-9 col-xs-9" style="text-align: end; padding-right: 0px;">

                                    <input type="text" name="chat_msg" id="chat_msg" class="form-control get_chat" style="height: 40px;">
                                </div>

                                <div class="col-lg-3 col-xs-3" style="padding-left: 0px;">
                                    <button type="submit" class="chat-send-btn" id="send">
                                        <i class="fa fa-paper-plane"
                                           style="color: white; font-size: 14px;"></i>&nbsp;&nbsp;&nbsp;Send
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
{{--                @else--}}

{{--                @endif--}}
            </div>
      @endif
    </div>
@endsection

@section('JS')
    <script>

        $('.chat').scrollTop($('.chat')[0].scrollHeight);

        $('#my_form').submit(function(e){
            e.preventDefault();
            var message = $(".get_chat").val();

            var user_id = $('#user_id').val();

            var chat_message = $('#chat_msg').val();

            if(chat_message){
                $.ajax({
                    url: '{{ route('store-chats') }}',
                    type: 'POST',
                    data: {message: message, user_id: user_id},
                    dataType: 'JSON',
                    success: (data) => {
                        $('.chat').scrollTop($('.chat')[0].scrollHeight);
                        $('form')[0].reset();
                        //$(".get_chat").reset();
                    },
                });
            }
        });
    </script>

    <script>
    <?php
        if (isset($_GET['id'])) {
    ?>
        function myFunction(x) {
          if (x.matches) { // If media query matches
           $(".left_list").css("display", "none");
          }
          else{
            $(".left_list").css("display", "block");

          }
        }

        var x = window.matchMedia("(max-width: 990px)")
        myFunction(x) // Call listener function at run time
        x.addListener(myFunction) // Attach listener function on state changes
    <?php
        }
    ?>
    </script>
@endsection


