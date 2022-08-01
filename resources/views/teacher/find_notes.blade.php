@if(count($find) > 0)
    @foreach($find as $note)
        <div class="col-lg-4" style="margin-bottom: 20px;">
            <div class="col-lg-12 col-md-12 notes_resp_mrgn" style="background-color: #F9C660;
                     padding: 20px; margin-bottom: 20px;">
                <a href="{{ route('teacher.delete-notes', ['id' => encrypt($note->id)]) }}" class="btn btn-xs btn-danger"> <i class='fa fa-trash'></i></a>
                <a href="{{url('teacher/edit_note/'.$note->id)}}" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i> </a>
                <h3 style="text-align: center">{{$note->title}}</h3>
                <div class="posted_note" style="background-color: #F9C660;">
                    <p style="text-align: center; margin-top: 30px; background-color: #F9C660;">
                        {!! $note->note_description !!}
                    </p>
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
