@include('header')


<body>
    <div class="banner-two"></div>
           <div class="tab-sec"><div class="row">
                <div class="col-md-4 tab-col">
                    <img src="{{url('/images/profile.png')}}" alt="Image" class="tab-img"/>
                    <h2>Kathy</h2>
                    <h3>(Teacher)</h3>
                    <ul class="profile-list-rating">
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star-half-o" aria-hidden="true"></i></li>
                        <li>4.8</li>
                        <li>(22)</li>
                    </ul>
                    <ul class="nav-tabs tabs-left sideways">
                        <li><a href="#class" data-toggle="tab">My Class</a></li>
                        <li><a href="#course" data-toggle="tab">Create Class</a></li>
                        <li  class="active"><a href="#meeting" data-toggle="tab">My Courses</a></li>
                        <li><a href="#teachers" data-toggle="tab">Create Course</a></li>
                        <li><a href="#history" data-toggle="tab">My Student</a></li>
                        <li><a href="#notes" data-toggle="tab">Join Meeting</a></li>
                        <li><a href="#chat" data-toggle="tab">History</a></li>
                        <li><a href="#payment" data-toggle="tab">Notes</a></li>
                        <li><a href="#chat-one" data-toggle="tab">Chat</a></li>
                        <li><a href="#menu" data-toggle="tab">Pricing Menu</a></li>
                        <li><a href="#profile" data-toggle="tab"> My Profile</a></li>
                        <li><a href="#block" data-toggle="tab">Write Block</a></li>
                        <li><a href="#status" data-toggle="tab">My Status</a></li>
                    </ul>
                </div>
                <div class="col-md-8 tab-content-col">
                    <div class="tab-content">
                        <div class="tab-pane" id="class"></div>
                        <div class="tab-pane" id="course">Profile Tab.</div>
                        <div class="tab-pane active" id="meeting">
                            <h1>DASHBORAD / <span class="span-class"> COURSE DETAILS</span></h1>

                            <div class="row mt-5 black-img-row">
                                <div class="col-sm-4">
                                    <img src="{{url('/images/black.png')}}" alt="Image"/>
                                    <span class="img-text">Lenght: 3 hr 30 Min</span>
                                </div>
                                <div class="col-sm-8">
                                    <div class="heading-1">
                                        <h2><strong>Learn python coding for <br> beginners <span class="span-class">(Physics Class)</span></strong></h2>
                                        <hr>
                                        <h4>Teacher <br><span class="span-class">Andrew Jonson</span></h4>
                                        <h4><i class="fa fa-calendar" aria-hidden="true"></i> Created Date <br><span class="span-class">00/00/2021</span></h4>
                                        <h4><i class="fa fa-clock-o" aria-hidden="true"></i> Created Time <br> <span class="span-class">00:00</span>PM</h4>
                                    </div>
                                </div>
						    </div>
                            <div class="row mt-5">
                                <div class="col-md-9 heading-1">
                                    <h2 class="bottom-line">Course Description</h2>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                        when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                        It has survived not only five centuries, but also the leap into electronic typesetting,
                                        remaining essentially unchanged. It was popularised in the 1960s with the release of
                                        Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                                        software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                </div>
                                <div class="col-md-3"></div>
                            </div>
                            <div class="row mt-1">
                                <div class=" col-md-9 heading-1">
                                    <h2 class="bottom-line">Related Classes</h2>
                                </div>
                                <div class="col-md-3"></div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-2">
                                    <div class="icon-box">
                                         <img src="{{url('/images/clock.png')}}" alt="Image"/><br>
                                         <span>Physical Class</span>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="icon-box">
                                            <img src="{{url('/images/clock.png')}}" alt="Image"/><br>
                                            <span>Chemistry Class</span>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="icon-box">
                                         <img src="{{url('/images/clock.png')}}" alt="Image"/><br>
                                         <span> Geology Class</span>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="icon-box">
                                         <img src="{{url('/images/clock.png')}}" alt="Image"/><br>
                                         <span>Another Class</span>
                                    </div>
                                </div>
                                <div class="col-md-2"></div>
                                <div class="col-md-2"></div>
                            </div>
                            <div class="row mt-5">
                                <div class=" col-md-9 heading-1 float-text">
                                    <h2 class="bottom-line"> Class session vedios / documents</h2>
                                    <span class="span-class"><i class="fa fa-download" aria-hidden="true"></i> download</span>
                                </div>
                                <div class="col-md-3"></div>
                            </div>
                            <div class="row mt-5 download-img">
                                <div class="col-md-3">
                                    <a href="/images/play.png" download>
                                    <img src="{{url('/images/play-one.png')}}" alt="Image"/>
                                    </a>
                                </div>
                                <div class="col-md-3">
                                    <a href="/images/play.png" download>
                                    <img src="{{url('/images/play-one.png')}}" alt="Image"/>
                                    </a>
                                </div>
                                <div class="col-md-3">
                                <a href="/images/play.png" download>
                                    <img src="{{url('/images/play-one.png')}}" alt="Image"/>
                                    </a>
                                </div>
                            </div>
                            <div class="row mt-5 download-img">
                                <div class="col-md-3">
                                    <a href="/images/play.png" download>
                                    <img src="{{url('/images/image-down.png')}}" alt="Image"/>
                                    </a>
                                </div>
                                <div class="col-md-3">
                                    <a href="/images/play.png" download>
                                    <img src="{{url('/images/file-down.png')}}" alt="Image"/>
                                    </a>
                                </div>
                                <div class="col-md-3"></div>
                            </div>
                            <div class="row mt-5">
                                <div class=" col-md-9 heading-1 float-text">
                                    <h2 class="bottom-line"> Live Videos</h2>
                                    <span class="span-class"><i class="fa fa-download" aria-hidden="true"></i> download</span>
                                </div>
                                <div class="col-md-3"></div>
                            </div>
                            <div class="row mt-5 download-img">
                                <div class="col-md-3">
                                    <a href="/images/play.png" download>
                                    <img src="{{url('/images/play-one.png')}}" alt="Image"/>
                                    </a>
                                </div>
                                <div class="col-md-3">
                                    <a href="/images/play.png" download>
                                    <img src="{{url('/images/play-one.png')}}" alt="Image"/>
                                    </a>
                                </div>
                                <div class="col-md-3 last">
                                   <div class="plus-box">
                                       <span>+<br>Upload Recorded Live Video</span>
                                   </div>
                                </div>
                            </div>
                       </div>
                        <div class="tab-pane" id="teachers">Settings Tab.</div>
                        <div class="tab-pane" id="history">history Tab.</div>
                        <div class="tab-pane" id="notes">Notes Tab.</div>
                        <div class="tab-pane" id="chat">Chat Tab.</div>
                        <div class="tab-pane" id="payment">Payment Tab.</div>
                        <div class="tab-pane" id="#chat-one">Payment Tab.</div>
                        <div class="tab-pane" id="#menu">Payment Tab.</div>
                        <div class="tab-pane" id="#profile"></div>
                        <div class="tab-pane" id="#block">Payment Tab.</div>
                        <div class="tab-pane" id="#status">Payment Tab.</div>
				    </div>
			    </div>
                <div class="clearfix"></div>
            </div></div>
<!-- last blue section start -->
        <div class="next-project">
            <div class="two-img">
                <img src="{{url('/images/dot-shape-primary.svg')}}" alt="Image"/>
                <img src="{{url('/images/dot-shape-white.svg')}}" alt="Image"/>
            </div>
            <div class="container">
                <h1>Have A Vision For Your</h1>
                <h1>Next Project? Let's Get Your</h1>
                <h1>14 Day Trial Started Now!</h1>
                <div class="btn-sec mt-5">
                    <button>Learn More <img src="{{url('/images/arrow.png')}}" alt="Image"/></button>
                    <button>Join With Us!</button>
                </div>
            </div>
            <div class="one-img">
                <img src="{{url('/images/dot-shape-white.svg')}}" alt="Image"/>
            </div>
        </div>
</body>


@include('footer')
