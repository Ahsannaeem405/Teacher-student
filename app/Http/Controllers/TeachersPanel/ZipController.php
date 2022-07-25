<?php

namespace App\Http\Controllers\TeachersPanel;

use App\Http\Controllers\Controller;
use App\Models\CourseLecture;
use App\Models\CreateCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use ZipArchive;

class ZipController extends Controller
{
    public function zipFile($name, $live, Request $request){
        $course_name = decrypt($name);
        if($request->has('tech_id')){
            $tech_id = decrypt($request->tech_id);
        }
        else{
            $tech_id = auth()->user()->id;
        }

        $zip = new ZipArchive;
        if($live=="yes")
        {
            $type='live';

        }
        else{
            $type='';
        }

        $fileName = 'mylectures.zip';

        $path = public_path('videos/'.$course_name.$type.$tech_id.'/'.$fileName);
        unlink($path);

        if ($zip->open(public_path('videos/'.$course_name.$type.$tech_id.'/'.$fileName), ZipArchive::CREATE) === TRUE)
        {
            if(auth()->user()->role == '2'){
                $files = File::files(public_path('videos/'. $course_name.$type. auth()->user()->id));
            }else{
                $files = File::files(public_path('videos/'. $course_name.$type.$tech_id));
            }
            foreach ($files as $key => $value) {

                    $relativeNameInZipFile = basename($value);
                    $zip->addFile($value, $relativeNameInZipFile);
            }
            $zip->close();
        }

        if($request->has('course_id')){
            $course_id = decrypt($request->course_id);
            (new CreateCourse())->getCourseDownloads($course_id);
        }

        return response()->download(public_path('videos/'.$course_name.$type.$tech_id.'/'.$fileName));
    }
}
