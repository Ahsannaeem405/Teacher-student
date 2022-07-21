<?php

namespace App\Http\Controllers;

use App\Models\CreateCourse;
use App\Models\studentnote;
use App\Models\User;
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

    public function teacherFindCourse(Request $req)
    {
        $data=$req->data;

        $find = CreateCourse::where('course_name', 'LIKE', "%$data%")
            ->whereHas('class')
            ->get();

        return view('teacher.find_course', compact('find'));
    }

    public function teacherFindStudent(Request $req)
    {
        $data=$req->data;

        $find = User::where('name', 'LIKE', "%$data%")
            ->whereHas('class')
            ->get();

        return view('teacher.find_student', compact('find'));
    }

    public function teacherFindNotes(Request $req)
    {
        $data=$req->data;

        $find = studentnote::where('title', 'LIKE', "%$data%")
            ->where('student_id', auth()->user()->id)
            ->get();

        return view('teacher.find_notes', compact('find'));
    }

    public function studentFindClass(Request $req)
    {
        $data=$req->data;

        $find = CreateClass::where('class_title', 'LIKE', "%$data%")->get();

        return view('student.find_class',compact('find'));
    }

    public function studentFindCourses(Request $req)
    {
        $data=$req->data;

        $find = CreateCourse::where('course_name', 'LIKE', "%$data%")
            ->whereHas('class')
            ->get();

        return view('student.find_course', compact('find'));
    }

    public function studentFindMyCourses(Request $req)
    {
        $data=$req->data;

        $find = CreateCourse::where('course_name', 'LIKE', "%$data%")
            ->whereHas('class')
            ->get();

        return view('student.find_my_course', compact('find'));
    }

    public function studentFindNotes(Request $req)
    {
        $data=$req->data;

        $find = studentnote::where('title', 'LIKE', "%$data%")
            ->where('student_id', auth()->user()->id)
            ->get();

        return view('student.find_notes', compact('find'));
    }
}
