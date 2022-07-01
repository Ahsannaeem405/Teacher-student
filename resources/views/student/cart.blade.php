@extends('student.dashboard-layout')

@section('title', 'Teacher Timeline')

@section('content')
    <div class="container-fluid" style="margin-bottom: 50%;">
        <div class="row" style="margin-bottom: 2%;">
            <div class="col-lg-8" style="padding-top: 30px;">
                <h3>Cart</h3>
            </div>
        </div>

        <div class="row dashboard-searchbar-bottom-line">
            <div class="col-lg-12" style="border: 1px solid #707070"></div>
        </div>

        <div class="row" style="margin-bottom: 2%;">
            <div class="col-lg-12">
                <div style="color: #585858">
                    <h4><strong>Items in Cart ( {{$cart->count()}} )</strong></h4>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach($cart as $carts)
         
            <div class="col-lg-6">
                <div class="col-lg-6">
                    <p><strong>{{$carts->course->course_name}} </strong></p>
                </div>
                <div class="col-lg-3">
                    <p style="color: #318215"><strong>{{$carts->course->price}}</strong></p>
                </div>
                <div class="col-lg-3" style="padding-top: 20px;">
                    <button type="button" class="btn btn-xs btn-danger userDeletecart" userId="{{$carts->id}}"> <i class='fa fa-trash'></i></button>
                </div>
                <a href="{{ url('student/payment/type/'.$carts->id) }}" class="add-cart-btn"
                style="text-decoration: none; color: white;"><strong>Pay Now</strong></a>
            </div>
            @endforeach

            <div class="col-lg-6" style="background-color: #F6F6F6">
                <div class="col-lg-12" style="margin-bottom: 10px; padding: 0px;">
                    <h3>ORDER SUMMARY</h3>
                </div>
                @foreach($cart as $carts)
                <div class="col-lg-10" style="margin: 0px; padding: 0px;">
                    <p><strong>{{$carts->course->course_name}}</strong></p>
                </div>

                <div class="col-lg-2">
                    <p style="color: #318215"><strong>{{$carts->course->price}}</strong></p>
                </div>
@endforeach
                <div class="col-lg-12" style="margin: 0px; padding: 0px;">
                    <p style="color: #585858"><strong>Plan details</strong></p>
                </div>

                <div class="col-lg-12" style="margin-bottom: 20px; padding: 0px;">
                    <p style="">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Pellentesquevitae purus in enim dictum congue. Lorem ipsum
                        dolor sit amet,consectetur adipiscing elit. Integer gravida
                        metus arcu
                    </p>
                </div>

                <div class="col-lg-1" style="padding: 0px;">
                    <i class="fa-solid fa-circle-check"
                       style="color: #318215"></i>
                </div>
                <div class="col-lg-11" style="padding: 0px;">
                    <p>
                        Watch your video anytime at<br>
                        your leisure
                    </p>
                </div>

                <div class="col-lg-1" style="padding: 0px;">
                    <i class="fa-solid fa-circle-check"
                       style="color: #318215"></i>
                </div>
                <div class="col-lg-11" style="padding: 0px;">
                    <p>
                        Learn more of Math equations<br> and stuff
                    </p>
                </div>

                <div class="col-lg-1" style="padding: 0px;">
                    <i class="fa-solid fa-circle-check"
                       style="color: #318215"></i>
                </div>
                <div class="col-lg-11" style="padding: 0px;">
                    <p>
                        Watch videos anytime at your<br>
                        leisure
                    </p>
                </div>

                <div class="col-lg-1" style="padding: 0px;">
                    <i class="fa-solid fa-circle-check"
                       style="color: #318215"></i>
                </div>
                <div class="col-lg-11" style="padding: 0px;">
                    <p>
                        Share your videos with your<br>
                        social media
                    </p>
                </div>
            </div>

            <div class="col-lg-10" style="margin-top: 10%; text-align: end">
                {{-- <a href="{{ route('student.payment-type') }}" class="add-cart-btn"
                   style="text-decoration: none; color: white;"><strong>Check Out</strong></a> --}}
            </div>
        </div>
        
    </div>
@endsection

@section('JS')

<script>
    $('.userDeletecart').click(function(e) {
        e.preventDefault();
        var user_id = $(this).attr('userId');
        // alert(user_id);
        swal({
                title: "Are you sure?",
                text: "Do you want to delete this cart course?",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        url: '{{URL::to('student/delete_cart')}}',
                        type: 'get',
                        data: {
                            'user_id': user_id
                        },
                        success: function(result) {
                            swal(result.success, {
                                    icon: "success",
                                })
                                .then((result) => {
                                    location.reload();
                                });
                            // window.reload();
                        }
                    });
                    // admin/deleteuser
                }
            });
    });
</script>
@endsection
