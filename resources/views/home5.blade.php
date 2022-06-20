@include('header')
<script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>

<body>
    <div class="banner-two"></div>
           <div class="tab-sec"><div class="row" style="width: 100%">

@include('teacher.leftbar')
                <div class="col-md-8 tab-content-col profile_col ">
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
                            <h1 class="H3_main_head" >DASHBORAD / <span class="span-class"> MY PROFILE</span></h1>
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

                        <script>
                            ClassicEditor
                                    .create( document.querySelector( '#editor' ) )
                                    .then( editor => {
                                            console.log( editor );
                                    } )
                                    .catch( error => {
                                            console.error( error );
                                    } );
                    </script>
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

        <form action="#" class="profile-form">
            <label for="fname">First name</label><br>
            <input type="text" id="fname" name="fname" class="form-control border"
                   style="font-size: 18px;"><br>


            <label for="lname">Last name</label><br>
            <input type="text" id="lname" name="lname" class="form-control border"
                   style="font-size: 18px;"><br>
            <label for="email">Email</label><br>
            <input type="email" id="email" name="email" class="form-control border"
                   style="font-size: 18px;"><br>

            <label for="subject">Subject</label><br>
            <select id="Subject" name="carlist" form="carform" class="form-control border"
