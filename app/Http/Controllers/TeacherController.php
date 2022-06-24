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

    public function myCourse(){
        return view('teacher.my-courses');
    }

    public function myStudents(){
        return view('teacher.my-students');
    }

    public function priceMenu(){
        return view('teacher.price-menu');
    }

    public function paymentType(){
        return view('teacher.payment-type');
    }

    public function paymentSubmission(){

        return view('teacher.payment-successful');
    }

    public function courseDetail(){
        return view('teacher.course-detail');
    }

    public function notes(){
        return view('teacher.notes');
    }

    public function createNotes(){
        return view('teacher.new-notes');
    }

    public function createBlog(){
        return view('teacher.create-blog');
    }

    public function createClass(){
        return view('teacher.create-class');
    }

    public function uploadProfile(){
        return view('teacher.upload-profile');
    }

    public function status(){
        return view('teacher.status');
    }

    public function changePassword(){
        return view('teacher.change-password');
    }
}
