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

        <div class="row teacher_chat">
            <div class="col-lg-3">
                <div>
                   <span>
                       <i class="fa-solid fa-magnifying-glass"
                          style="color: #C9C97E; font-size: 20px;"></i>
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Teachers&nbsp;
                       <i class="fa-solid fa-caret-down"></i>
                    </span>
                </div>

                <div class="row teacher_chat">
                    <div class="col-lg-4" style="padding-top: 10px;">
                        <img src="{{url('/images/teacher-chat.png')}}"
                             width="70" alt="Image"/>
                    </div>

                    <div class="col-lg-5" style="padding-top: 15px;">
                        <h4><strong>Teacher</strong></h4>
                        <p style="color: grey">Start Conv...</p>
                    </div>
                </div>

                <div class="row teacher_chat">
                    <div class="col-lg-4" style="padding-top: 10px;">
                        <img src="{{url('/images/teacher-chat.png')}}"
                             width="70" alt="Image"/>
                    </div>

                    <div class="col-lg-5" style="padding-top: 15px;">
                        <h4><strong>Teacher</strong></h4>
                        <p style="color: grey">Start Conv...</p>
                    </div>
                </div>

                <div class="row teacher_chat">
                    <div class="col-lg-4" style="padding-top: 10px;">
                        <img src="{{url('/images/teacher-chat.png')}}"
                             width="70" alt="Image"/>
                    </div>

                    <div class="col-lg-5" style="padding-top: 15px;">
                        <h4><strong>Teacher</strong></h4>
                        <p style="color: grey">Start Conv...</p>
                    </div>
                </div>

                <div class="row teacher_chat">
                    <div class="col-lg-4" style="padding-top: 10px;">
                        <img src="{{url('/images/teacher-chat.png')}}"
                             width="70" alt="Image"/>
                    </div>

                    <div class="col-lg-5" style="padding-top: 15px;">
                        <h4><strong>Teacher</strong></h4>
                        <p style="color: grey">Start Conv...</p>
                    </div>
                </div>

                <div class="row teacher_chat">
                    <div class="col-lg-4" style="padding-top: 10px;">
                        <img src="{{url('/images/teacher-chat.png')}}"
                             width="70" alt="Image"/>
                    </div>

                    <div class="col-lg-5" style="padding-top: 15px;">
                        <h4><strong>Teacher</strong></h4>
                        <p style="color: grey">Start Conv...</p>
                    </div>
                </div>

                <div class="row teacher_chat">
                    <div class="col-lg-4" style="padding-top: 10px;">
                        <img src="{{url('/images/teacher-chat.png')}}"
                             width="70" alt="Image"/>
                    </div>

                    <div class="col-lg-5" style="padding-top: 15px;">
                        <h4><strong>Teacher</strong></h4>
                        <p style="color: grey">Start Conv...</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="std-chat">
                    <span>
                        Student &nbsp;&nbsp;</span><img src="{{ asset('images/boy.png') }}" width="40">
                    <p>that it work</p>
                    <i class="fa-solid fa-clock" style="color: grey"></i>&nbsp;&nbsp;12:40 PM, Now
                </div>

                <div class="teach-chat">
                    <span>
                        <img src="{{ asset('images/teacher-chat.png') }}" width="40">&nbsp;&nbsp; Teacher &nbsp;&nbsp;</span>
                    <p>that it work</p>
                    <i class="fa-solid fa-clock" style="color: grey"></i>&nbsp;&nbsp;12:40 PM, Now
                </div>

                <div class="row chatBox">
                    <div class="col-lg-7" style="text-align: end; padding-right: 0px;">
                        <label for="chat-file" class="clipper-btn">
                            <i class="fa-solid fa-paperclip"></i>
                        </label>
                        <input type="file" name="chat-file" id="chat-file"
                               style="visibility:hidden;" class="clipper-btn">

{{--                        <button type="button" class="clipper-btn">--}}
{{--                            --}}
{{--                        </button>--}}

                            <textarea name="chat-msg" cols="40" class="text-box"
                                      rows="2" placeholder="Type message here..." ></textarea>
                    </div>

                    <div class="col-lg-3" style="padding-left: 0px;">
                        <button type="submit" class="chat-send-btn">
{{--                            <input type="file" name="chat-file">--}}
                            <i class="fa fa-paper-plane"
                               style="color: white; font-size: 14px;"></i>&nbsp;&nbsp;&nbsp;Send
                            {{--                        <img src="{{ asset('images/search-icon.png') }}" alt="no image" width="20">--}}
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


