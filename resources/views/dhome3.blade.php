@include('header')
<div class="row">

        <div class="col-md-4 tab-col">
            <img src="{{url('/images/boy.png')}}" alt="Image" class="tab-img"/>
            <h2>Josh</h2>
            <h3>(Student)</h3>
            <ul class="nav-tabs tabs-left sideways" >
                <li class="active"><a href="#class" data-toggle="tab">My Class</a></li>
                <li><a href="#course" data-toggle="tab">My Course</a></li>
                <li><a href="#meeting" data-toggle="tab">Join Meeting</a></li>
                <li><a href="#teachers" data-toggle="tab">Teachers</a></li>
                <li><a href="#history" data-toggle="tab">History</a></li>
                <li><a href="#notes" data-toggle="tab">Notes</a></li>
                <li><a href="#chat" data-toggle="tab">Chat</a></li>
                <li><a href="#payment" data-toggle="tab">Payment Method</a></li>
            </ul>
        </div>

</div>


<div class="next-project ">
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

@include('footer')
