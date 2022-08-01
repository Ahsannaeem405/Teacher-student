@if(count($find) > 0)
    @foreach($find as $purchase)
        <div class="col-sm-4 col-md-4 col-lg-4">
            <div class="col-12">
                <div class="card mt-5">
                    @php
                        $imagePath = explode('.', !is_null($purchase->image) ? $purchase->image : 'do_not_delete.png');
                    @endphp
                    <img src="{{asset('images')."/". $imagePath[0].".".$imagePath[1]}}"
                         class="img-fluid" alt="No Image" style="width: 100%;height: 100%; object-fit: contain;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <a href="{{url('student/all_courses/'.$purchase->id)}}" style="text-decoration: none">
                                    <h4><strong>{{$purchase->name}} </strong></h4>
                                </a>
                                <h5><span class="section3-span" style="color: #c8c97d;"><strong>{{ $purchase->class->class_name }}</strong></span></h5>
                            </div>
                            <div class="col-sm-6 text-right" style="padding-top: 8px;">
                                <i class="fa fa-star" style="color: #C9C97E"></i>
                                <span class="section3-span1">4.8</span>   <span class="section3-span2">(22)</span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <p class="h4 card-text pt-3">{{ $purchase->bio }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@else
    <div style="text-align: center; font-size: 24px">
        <i class="fa-solid fa-folder-open"></i>
        <p>No record found...</p>
    </div>
@endif
