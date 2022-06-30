<?php

namespace App\Http\Controllers;
use App\Models\studentnote;
use Illuminate\Http\Request;

class StudentDashboardController extends Controller
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
        $notes=studentnote::whereStudent_id(\Auth::user()->id)->get();
        return view('student.notes',compact('notes'));
    }

    public function createNotes(){
        return view('student.create-notes');
    }
    public function storeNotes(Request $request){
       $note=new studentnote();
       $note->student_id=\Auth::user()->id;
       $note->title=$request->notes_name;
       $note->note_description=$request->describe_notes;
       $note->save();
        return back();
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
