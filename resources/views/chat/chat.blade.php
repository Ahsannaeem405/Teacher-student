@extends('student.dashboard-layout')

@section('title', 'Chat')

@section('content')
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

        <div class="row">
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
        </div>

        <div class="row teacher_chat">
            <div class="col-lg-5">
                @foreach($users as $user)
                    <div style="border: 1px solid #cfcaca;
                    background-color: lightgrey; padding: 20px;">
                        @php
                            $image = !is_null($user->image) ? $user->image : 'user-avatar.png';
                        @endphp
                        <div class="row teacher_chat">
                            <div class="col-lg-2" style="padding-top: 10px;">
                                <img src="{{asset('images')."/". $image}}" alt="Image"
                                style="border-radius: 50%"/>
                            </div>

                            <div class="col-lg-5" style="padding-top: 15px;">
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
                @endforeach
            </div>

            @if(request()->has('id'))
                <div class="col-lg-7" style="border: 1px solid lightgrey">
                    @foreach($messages as $message)
                        @if($message->student->role == '2')
                            <div class="std-chat">
                                @php
                                    $image = !is_null($message->student->image) ? $message->student->image : 'user-avatar.png';
                                @endphp
                                <span>
                                    {{ ucfirst($message->student->name) }} &nbsp;&nbsp;
                                </span>

                                <img src="{{asset('images')."/". $image}}" alt="Image" width="40"
                                     style="border-radius: 50%"/>

                                <p>{!! $message->message !!}</p>
                                <i class="fa-solid fa-clock" style="color: grey"></i>&nbsp;&nbsp;{{ date('Y-F-d', strtotime($message->created_at)) }}
                            </div>
                        @else
                            <div class="teach-chat">
                                @php
                                    $image = !is_null($message->student->image) ? $message->student->image : 'user-avatar.png';
                                @endphp

                                <img src="{{asset('images')."/". $image}}" alt="Image" width="40"
                                     style="border-radius: 50%"/>

                                <span>
                                    {{ ($message->student->role == '3') ? ucfirst($message->student->name) : 'Student' }} &nbsp;&nbsp;
                                </span>

                                <p>{!! $message->message !!}</p>
                                <i class="fa-solid fa-clock" style="color: grey"></i>&nbsp;&nbsp;{{ date('Y-F-d', strtotime($message->created_at)) }}
                            </div>
                        @endif
                    @endforeach

                    <form enctype="multipart/form-data" id="my_form">
                        <input type="hidden" name="user_id" id="user_id" value="{{ request()->get('id') }}" />
                        <div class="row chatBox">
                            <div class="col-lg-7" style="text-align: end; padding-right: 0px;">
                                <label for="chat-file" class="clipper-btn">
                                    <i class="fa-solid fa-paperclip"></i>
                                </label>
                                <input type="file" name="chat_file" id="chat-file"
                                       style="visibility:hidden;" class="clipper-btn">
                                <textarea name="chat_msg" class="text-box" id="chat_msg"
                                           placeholder="Type message here..." ></textarea>
                            </div>

                            <div class="col-lg-3" style="padding-left: 0px;">
                                <button type="submit" class="chat-send-btn" id="send">
                                    <i class="fa fa-paper-plane"
                                       style="color: white; font-size: 14px;"></i>&nbsp;&nbsp;&nbsp;Send
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            @else

            @endif
        </div>
    </div>
@endsection

@section('JS')
    <script>

        $('#my_form').submit(function(e){


            e.preventDefault();
            var message = tinyMCE.get('chat_msg').getContent();
            var user_id = $('#user_id').val();

            $.ajax({
               url: '{{ route('store-chats') }}',
               type: 'POST',
               data: {message: message, user_id: user_id},
               dataType: 'JSON',
                success: (data) => {
                    $('form')[0].reset();
                },
           });
        });
    </script>
@endsection


