<?php

namespace App\Http\Controllers\TeachersPanel;

use App\Http\Controllers\Controller;
use App\Models\CourseLecture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use ZipArchive;

class ZipController extends Controller
{
    public function zipFile($name, Request $request){

        $course_name = decrypt($name);
        if($request->has('tech_id')){
            $tech_id = decrypt($request->tech_id);
        }

        $zip = new ZipArchive;

        $fileName = 'mylectures.zip';

        if ($zip->open(public_path('videos/'.$course_name.$tech_id.'/'.$fileName), ZipArchive::CREATE) === TRUE)
        {
            if(auth()->user()->role == '2'){
                $files = File::files(public_path('videos/'. $course_name. auth()->user()->id));
            }else{
                $files = File::files(public_path('videos/'. $course_name.$tech_id));
            }

            foreach ($files as $key => $value) {
                $relativeNameInZipFile = basename($value);
                $zip->addFile($value, $relativeNameInZipFile);
            }

            $zip->close();
        }

        return response()->download(public_path('videos/'.$course_name.$tech_id.'/'.$fileName));

    }
}
