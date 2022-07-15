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
      alert(JSON.stringify(data));
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

        <div class="row teacher_chat">
            <div class="col-lg-5">
                @foreach($users as $user)
                    <div style="border: 1px solid #cfcaca;
                     ">
                        @php
                            $image = !is_null($user->image) ? $user->image : 'user-avatar.png';
                        @endphp
                        <div class="row teacher_chat">
                            <div class="col-lg-12" style="padding-top: 10px;">
                                <img src="{{asset('images')."/". $image}}" alt="Image"
                                style="border-radius: 50%"/>
                            

                                <div>
                                @if(auth()->user()->id == '2')
                                    <a href="{{ route('chat', ['id' => encrypt($user->id)]) }}" style="text-decoration: none">
                                        <p><strong>{{ $user->name }}</strong></p>
                                    </a>
                                @else
                                    <a href="{{ route('chat', ['id' => encrypt($user->id)]) }}" style="text-decoration: none">
                                        <p><strong>{{ $user->name }}</strong></p>
                                    </a>
                                @endif
                                <p style="color: grey">Start Conv...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            @if(request()->has('id'))
                <div class="col-lg-7" style="border: 1px solid lightgrey">
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
                        
                            <div class="col-lg-9" style="text-align: end; padding-right: 0px;">
                               
                                <input type="text" name="chat_msg"  class="form-control get_chat" style="height: 40px;">
                            </div>

                            <div class="col-lg-3" style="padding-left: 0px;">
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
    </div>
@endsection

@section('JS')
    <script>
        $('.chat').scrollTop($('.chat')[0].scrollHeight);

        $('#my_form').submit(function(e){


            e.preventDefault();
            var message = $(".get_chat").val();
            var user_id = $('#user_id').val();

            $.ajax({
               url: '{{ route('store-chats') }}',
               type: 'POST',
               data: {message: message, user_id: user_id},
               dataType: 'JSON',
                success: (data) => {
                    $('.chat').scrollTop($('.chat')[0].scrollHeight);
                    //$('form')[0].reset();
                    //$(".get_chat").reset();
                    
                },
           });
        });
    </script>
@endsection


