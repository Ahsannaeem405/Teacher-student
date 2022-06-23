@include('header')


<body>
    <div class="banner-two"></div>
           <div class="tab-sec"><div class="row">
                <div class="col-md-4 tab-col">
                    <img src="{{url('/images/boy.png')}}" alt="Image" class="tab-img"/>
                    <h2>Josh</h2>
                    <h3>(Student)</h3>
                    <ul class="nav-tabs tabs-left sideways">
                        <li><a href="#class" data-toggle="tab">My Class</a></li>
                        <li><a href="#course" data-toggle="tab">My Course</a></li>
                        <li><a href="#meeting" data-toggle="tab">Join Meeting</a></li>
                        <li class="active"><a href="#teachers" data-toggle="tab">Teachers</a></li>
                        <li><a href="#history" data-toggle="tab">History</a></li>
                        <li><a href="#notes" data-toggle="tab">Notes</a></li>
                        <li><a href="#chat" data-toggle="tab">Chat</a></li>
                        <li><a href="#payment" data-toggle="tab">Payment Method</a></li>
                    </ul>
                </div>
                <div class="col-md-8 tab-content-col">
                    <div class="tab-content">
                        <div class="tab-pane" id="class"></div>
                        <div class="tab-pane" id="course">Profile Tab.</div>
                        <div class="tab-pane" id="meeting">Messages Tab.</div>
                        <div class="tab-pane active" id="teachers">
                        <div class="section-2 mt-5 mb-5">
                             <div class="container">
                                <div class="row">
                                   <div class="col-md-10">
                                      <div class="section-2-heading">
                                         <h1>DASHBORAD /<span class="span-class">TEACHERS TIMELINE</span></h1>
                                      </div>
                                   </div>
                                   <div class="col-md-2"></div>
                                </div>
                             </div>
                        </div>
      <!----section-4 card ------->
      <div class="section-4 mt-5 mb-5">
         <div class="container">
            <div class="row">
               <div class="col-sm-4 col-md-4 col-lg-4">
                  <select name="cars" id="cars">
                     <option value="volvo">Subject</option>
                     <option value="saab">Saab</option>
                     <option value="opel">Opel</option>
                     <option value="audi">Audi</option>
                  </select>
               </div>
               <div class="col-sm-4 col-md-4 col-lg-4">
                  <select name="cars" id="cars">
                     <option value="volvo">Rating</option>
                     <option value="saab">Saab</option>
                     <option value="opel">Opel</option>
                     <option value="audi">Audi</option>
                  </select>
               </div>
               <div class="col-sm-4 col-md-4 col-lg-4">
                  <div class="radio_section-4">
                     <label for="one">Portfolio</label>
                     <input type="radio" name="radio" id="one" checked>
                     <label for="one">yes</label>
                     <input type="radio" name="radio" id="two">
                     <label for="two">No</label>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="section-3 mt-5 mb-5 ">
         <div class="container">
            <div class="row">
               <div class="col-sm-4 col-md-4 col-lg-4">
                  <div class="card mt-5 " >
                    <img src="{{url('/images/crd-one.png')}}" alt="Image"/>
                     <div class="card-body">
                        <div class="row">
                           <div class="col-sm-6">
                              <h4>Kateri</h4>
                              <h5><span class="section3-span"><strong> Technology</strong></span></h5>
                           </div>
                           <div class="col-sm-6 text-right">
                              <i class="fa fa-star"></i>
                              <span class="section3-span1">4.8</span>   <span class="section3-span2">(22)</span>
                           </div>
                        </div>
                        <p class="h4 card-text pt-3">I have been teaching biology for 15 years and I have a PHD in Biology. I want to give my students a modern approach to learning the field.</p>
                        <div class="icon pt-3">
                           <div class="row">
                              <div class="col-sm-4">
                                 <i class="fa fa-thumbs-up"></i>
                                 <span class="heading-span3">(200)</span>
                              </div>
                              <div class="col-sm-8 ">
                                 <i class="fa fa-comment"></i>
                                 <i class="fa fa-message-middle"></i>
                                 <span class="heading-span3">(30)</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-sm-4 col-md-4 col-lg-4">
                  <div class="card mt-5" style="">
                    <img src="{{url('/images/card-two.png')}}" alt="Image"/>
                     <div class="card-body ">
                        <div class="row">
                           <div class="col-sm-6">
                              <h4>Max</h4>
                              <h5><span class="section3-span">Relatioship</span></h5>
                           </div>
                           <div class="col-sm-6 text-right">
                              <i class="fa fa-star"></i>
                              <span class="section3-span1">4.8</span>   <span class="section3-span2">(22)</span>
                           </div>
                        </div>
                        <p class="h4 card-text pt-3">My name is Max and I work on Wall Street, in my course you will learn about Crypto Currency and how you can use it to fund your businesses.</p>
                        <div class="icon pt-3">
                           <div class="row">
                              <div class="col-sm-6">
                                 <i class="fa fa-thumbs-up"></i>
                                 <span class="heading-span3">(200)</span>
                              </div>
                              <div class="col-sm-6 ">
                                 <i class="fa fa-comment"></i>
                                 <span class="heading-span3">(30)</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-sm-4 col-md-4 col-lg-4">
                  <div class="card mt-5" style="">
                    <img src="{{url('/images/card-4.png')}}" alt="Image"/>
                     <div class="card-body">
                        <div class="row">
                           <div class="col-sm-6">
                              <h4>Rodhana</h4>
                              <h5><span class="section3-span">Technology</span></h5>
                           </div>
                           <div class="col-sm-6 text-right">
                              <i class="fa fa-star"></i>
                              <span class="section3-span1">4.8</span>
                              <span class="section3-span2">(22)</span>
                           </div>
                        </div>
                        <p class="h4 card-text pt-3">I am a claims adjuster for over 20 years and I want to show you how to get your license in three days.</p>
                        <div class="icon  pt-5">
                           <div class="row">
                              <div class="col-sm-6 ">
                                 <i class="fa fa-thumbs-up"></i>
                                 <span class="heading-span3">(200)</span>
                              </div>
                              <div class="col-sm-6">
                                 <i class="fa fa-comment"></i>
                                 <span class="heading-span3">(30)</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
{{--                        </div>--}}
                        <div class="tab-pane" id="history">history Tab.</div>
                        <div class="tab-pane" id="notes">Notes Tab.</div>
                        <div class="tab-pane" id="chat">Chat Tab.</div>
                        <div class="tab-pane" id="payment">Payment Tab.</div>
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
