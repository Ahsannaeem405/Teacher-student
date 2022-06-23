<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        return view('student.dashboard');
    }

    public function myProfile(){
        return view('student.my-profile');
    }

    public function history(){
        return view('student.d-history');
    }

    public function notes(){
        return view('student.notes');
    }

    public function createNotes(){
        return view('student.create-notes');
    }

    public function chat(){
        return view('student.chat');
    }

    public function priceMenu(){
        return view('student.price-menu');
    }

    public function teacherTimeline(){
        return view('student.teacher-timeline');
    }

    public function courseDetail(){
        return view('student.course-detail');
    }

    public function courseCart(){
        return view('student.cart');
    }

    public function paymentType(){
        return view('student.payment-type');
    }
}
