@extends('student.dashboard-layout')

@section('title', 'Teacher Timeline')

@section('content')
    <div class="container-fluid" style="margin-bottom: 50%;">
        <div class="row" style="margin-bottom: 2%;">
            <div class="col-lg-8" style="padding-top: 30px;">
                <h3>DASHBOARD / <span style="color: #C9C97E">TEACHER TIMELINE</span></h3>
            </div>
        </div>

        <div class="row" style="margin-bottom: 8%;">
            <div class="col-lg-4">
                <div class="col-12">
                    <select name="cars" class="form-control top-select-timeline">
                        <option value="volvo">Subject</option>
                        <option value="saab">Saab</option>
                        <option value="opel">Opel</option>
                        <option value="audi">Audi</option>
                    </select>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="col-12">
                    <select name="cars" class="form-control top-select-timeline">
                        <option value="volvo">Rating</option>
                        <option value="saab">5</option>
                        <option value="opel">4</option>
                        <option value="audi">3</option>
                        <option value="audi">2</option>
                        <option value="audi">1</option>
                    </select>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="col-12 portfolio">
                    <label for="one">Portfolio</label>
                    <input type="radio" name="radio" id="one" checked>
                    <label for="one">Yes</label>
                    <input type="radio" name="radio" id="two">
                    <label for="two">No</label>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach($purchasecourse as $purchase)
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="col-12">
                        <div class="card mt-5">
                            @php
                                $imagePath = explode('.', !is_null($purchase->teacher->image) ? $purchase->teacher->image : 'do_not_delete.png');
                                $ratings = \App\Models\Rating::get('stars');
                                if(count($ratings) > 0){
                                    foreach ($ratings as $rating){
                                        $rate[] = $rating->stars;
                                    }
                                    $res = array_sum($rate);
                                    $count = count($ratings);
                                    $result = $res / $count;
                                }
                            @endphp
                            <img src="{{asset('images')."/". $imagePath[0].".".$imagePath[1]}}"
                                 class="img-fluid" alt="No Image" style="width: 100%;height: 100%; object-fit: contain;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 col-sm-6">
                                      <a href="{{ route('student.teacher-profile', ['id' => encrypt($purchase->teacher->id)]) }}" style="text-decoration: none">
                                          <h4><strong>{{$purchase->teacher->name}} </strong></h4>
                                      </a>
                                        <h5><span class="section3-span" style="color: #c8c97d;"><strong>{{ $purchase->class->class_name }}</strong></span></h5>
                                    </div>
                                    @if(count($ratings) > 0)
                                        <div class="col-md-12 col-sm-6 text-right" style="padding-top: 8px;">
                                            @if($result > 1 && $result < 2)
                                                <span class="fa fa-star checked"></span>
                                            @elseif($result > 2 && $result < 3)
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                            @elseif($result > 3 && $result < 4)
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                            @elseif($result > 4 && $result < 5)
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                            @else
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                            @endif
                                            <span class="section3-span1">{{ $result }}</span>   <span class="section3-span2">{{ '(' .$count. ')'}}</span>
                                        </div>
                                    @else
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    @endif
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <p class="h4 card-text pt-3">{!! $purchase->teacher->bio !!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection


