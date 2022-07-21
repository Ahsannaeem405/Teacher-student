<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CreateClass;
use App\Models\meeting;
use App\Models\PurchaseCourse;



use Auth;
use URL;
class Teacher extends Controller
{
    public function find_class(Request $req)
    {
        $data=$req->data;

        $find=CreateClass::where('user_id',auth()->user()->id)->where('class_title', 'LIKE', "%$data%")->get();

        return view('/teacher/find_class',compact('find'));
    }

    public function studentFindClass(Request $req)
    {
        $data=$req->data;

        $find = CreateClass::where('user_id',auth()->user()->id)->where('class_title', 'LIKE', "%$data%")->get();
        return view('/teacher/find_class',compact('find'));
    }
    
    public function meeting()
    {
        $meet=meeting::where('user_id',auth()->user()->id)->get()->orderBy('id', 'DESC');;

        return view('/teacher/meeting',compact('meet'));
    }
    public function create_meeting()
    {
        if(Auth::User()->zoom_api==Null || Auth::User()->zoom_secret==Null)
        {
            
            return redirect('teacher/upload/profile')->with('error', 'Please Enter the Zoom Credentials First!');
        }
        else{
        return view('/teacher/create_meeting');
        }   
    }
    public function save_meeting(Request $req)
    {
        $call_url=URL::to('/').'teacher/meeting';

        return view('zoom' ,compact('req','call_url'));
    }
    public function std_meeting()
    {
        $sortDirection=auth()->user()->id;
        // $meet=PurchaseCourse::where('user_id',auth()->user()->id)
        // ->with(['get_meeting' => function ($query) use ($sortDirection) {
        //                             $query->orderBy('id', $sortDirection);
        // }])->get()->unique('teacher_id');
          $meet=meeting::with(['get_meeting' => function ($query) use ($sortDirection) {
                                    $query->where('user_id', $sortDirection);
        }])->orderBy('id', 'DESC')->get();
        
        return view('/student/meeting',compact('meet'));
    }
    
    
}
