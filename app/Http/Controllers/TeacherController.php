<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index(){
        return view('teacher.dashboard');
    }

    public function myProfile(){
        return view('teacher.my-profile');
    }

    public function createCourse(){
        return view('teacher.create-course');
    }

}
