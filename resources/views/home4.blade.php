@include('header')

    <body>
        <div class="banner"></div>
        <div class="select-sec">
            <div class="container">
                <h2>CART</h2>
                <div class="row col-middle">
                    <div class="col-md-7 form-col cart-col">
                        <h3>Items In Cart(1)</h3>
                        <div class="row delet-row">
                            <div class="col-md-4"><h5>Learn python coding for beginners</h5></div>
                            <div class="col-md-4"><span>$10</span></div>
                            <div class="col-md-4"><i class='fa fa-trash'></i></div>
                        </div>
                    </div>
                    <div class="col-md-5 order-sum-col">
                        <h2>ORDER SUMMERY</h2>
                        <div class="row basic-sec mb-4">
                            <div class="col-md-6">
                                <h3>Basic Plan</h3>
                            </div>
                            <div class="col-md-6">
                                 <span>$10 / Month</span>
                            </div>
                        </div>
                        <h3>Plane Details</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vitae purus in enim dictum congue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer</p>
                        <ul class="footer-link">
                            <li><i class="fa fa-check-circle-o" aria-hidden="true"></i>&nbsp; Watch your video anytime at your leisure</li>
                            <li><i class="fa fa-check-circle-o" aria-hidden="true"></i>&nbsp; Get 50 videos per month for $10 a month</li>
                            <li><i class="fa fa-check-circle-o" aria-hidden="true"></i>&nbsp; Watch videos anytime at your leisure</li>
                            <li><i class="fa fa-check-circle-o" aria-hidden="true"></i>&nbsp; Share your videos with you social media</li> 
                        </ul> 
                    </div>
                </div>
                <div class="row checkout-btn-row">
                    <div class="col-md-7"></div>
                    <div class="col-md-5"><button>Check Out</button></div>
                </div>
            </div>
        </div>
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
