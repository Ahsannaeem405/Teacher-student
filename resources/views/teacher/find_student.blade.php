@if(count($find) > 0)
    @foreach($find as $stud)
        <div class="col-lg-3 col-md-3 col-sm-2" style="padding-left: 40px; text-align: center">
            <div class="col-lg-12">
                <img src="{{ asset('images/Ellipse 36.png') }}" alt="no image" width="50">
            </div>
            <div class="col-lg-12">
            <span style="margin-top: 15px; font-size: 16px; font-weight: bold;">
                <a href="#" style="text-decoration: none; color: black">
                   {{$stud->name}}
                </a>
            </span>
                <span style="font-size: 12px;">
                <p>class: {{$stud->class->class_name}}</p>
            </span>
            </div>
        </div>
    @endforeach
@else
    <div style="text-align: center; font-size: 24px">
        <i class="fa-solid fa-folder-open"></i>
        <p>No record found...</p>
    </div>
@endif
