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
                        <li><a href="#meeting" data-toggle="tab">My Courses</a></li>
                        <li><a href="#teachers" data-toggle="tab">Create Course</a></li>
                        <li><a href="#history" data-toggle="tab">My Student</a></li>
                        <li><a href="#notes" data-toggle="tab">Join Meeting</a></li>
                        <li><a href="#chat" data-toggle="tab">History</a></li>
                        <li><a href="#payment" data-toggle="tab">Notes</a></li>
                        <li><a href="#chat-one" data-toggle="tab">Chat</a></li>
                        <li><a href="#menu" data-toggle="tab">Pricing Menu</a></li>
                        <li class="active"><a href="#profile" data-toggle="tab"> My Profile</a></li>
                        <li><a href="#block" data-toggle="tab">Write Block</a></li>
                        <li><a href="#status" data-toggle="tab">My Status</a></li>
                    </ul>
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