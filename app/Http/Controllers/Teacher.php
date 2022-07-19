<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CreateClass;

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
dd($find);
        return view('/teacher/find_class',compact('find'));
    }
}
