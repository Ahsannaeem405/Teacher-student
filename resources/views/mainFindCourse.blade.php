@if(isset($find) && count($find) > 0)
    @foreach($find as $course)
        @php
            $imagePath = explode('.', !is_null($course->course_image) ? $course->course_image : 'do_not_delete.png');
            $current = now();
            $created = $course->created_at;
            $dateDiff = date_diff($current,$created);
        @endphp

        <div class="col-md-4 p_cours_padding">
            <div class="card border box_b">
                <img src="{{asset('images')."/". $imagePath[0].".".$imagePath[1]}}"
                     class="card-img-top card-img-radius" alt="Card image cap">
                <div class="card-body" style="text-align: center; align-items: center">
                    <h5 class="card-title card_heading" >{{ $course->course_name }}</h5>
                    <p class="card-text">{!! $course->course_description !!}</p>
                    <div class="row card_section m-0">
                        <div class="col-lg-12 mar-top">
                            <div class="col-md-4">
                                <a href="{{ url('/login') }}">
                                    <i class="fa-solid fa-message icon_prop message-ml" style="cursor: pointer"></i>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <i class="fa-solid fa-download icon-size  icon_prop"></i>
                            </div>
                            <div class="col-md-4">
                                <i class="fa-solid fa-clock icon_prop"></i>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <span class="greyColor">{{ ($course->course_dowloads < 1) ? '0' : $course->course_dowloads}}</span>
                            </div>
                            <div class="col-md-4">
                                <span class="greyColor">{{ ($dateDiff->d > 0) ? $dateDiff->d.' d' : $dateDiff->h.' h' }} {{ $dateDiff->i }} m</span>
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
