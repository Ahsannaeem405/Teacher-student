@foreach($find as $course)
    @php
        $imagePath = explode('.', !is_null($course->course_image) ? $course->course_image : 'do_not_delete.png');
    @endphp

    <div class="col-md-4 p_cours_padding">
        <div class="card border box_b">
            <img src="{{asset('images')."/". $imagePath[0].".".$imagePath[1]}}"
                 class="card-img-top card-img-radius" alt="Card image cap">
            <div class="card-body" style="text-align: center; align-items: center">
                <h5 class="card-title card_heading" >{{ $course->course_name }}</h5>
                <p class="card-text">{!! $course->course_description !!}</p>
                <div class="row card_section m-0">
                    <div class="col-lg-2 mar-top">
                        <i class="fa-solid fa-message icon_prop message-ml"></i>
                    </div>
                    <div class="col-lg-4">
                        <i class="fa-solid fa-download icon-size  icon_prop"></i></i> <span class="greyColor">14</span>
                    </div>
                    <div class="col-lg-6">
                        <i class="fa-solid fa-clock icon_prop"></i> <span class="greyColor">15 minute</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
