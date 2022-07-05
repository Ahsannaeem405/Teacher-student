<?php

namespace App\Http\Controllers;
use App\Models\studentnote;
use App\Models\User;
use App\Models\CreateCourse;
use App\Models\CourseLecture;
use App\Models\cart;
use App\Models\History;
use App\Models\PurchaseCourse;
use Illuminate\Http\Request;

class StudentDashboardController extends Controller
{
    public function index(){
        $course=PurchaseCourse::whereUser_id(auth()->user()->id)->whereHas('class')->get();
      dd($course);
        return view('student.dashboard',compact('course'));
    }

       public function myProfile(){
        $res = (new User())->getTeacherData();
        $data = [
          'profile' => $res
        ];

        return view('student.my-profile', $data);
    }

    public function history(){
        $history=History::whereUser_id(auth()->user()->id)->get();
        return view('student.d-history',compact('history'));
    }
    public function deletehistory(Request $request){
        History::find($request->user_id)->delete();
        return response()->json(['success'=>'History deleted successfully!']);
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
        return back()->with('success',"Note Create Successfully");
    }

    public function deleteNotes(Request $request){
        studentnote::find($request->user_id)->delete();
        return response()->json(['success'=>'Note deleted successfully!']);
    }

    public function editNotes($id){
        $note=studentnote::find($id);
        return view('student.edit-note',compact('note'));
    }

    public function updateNotes(Request $request,$id){
        $note=studentnote::find($id);

        $note->title=$request->notes_name;
        $note->note_description=$request->describe_notes;
        $note->save();
         return back()->with('success',"Note Updated Successfully");
    }

    public function chat(){
        return view('student.chat');
    }

    public function priceMenu(){
        return view('student.price-menu');
    }

    public function teacherTimeline(){
        // $teachers=User::whereRole('2')->whereHas('course')->paginate('6');
        $purchasecourse=PurchaseCourse::where('user_id',auth()->user()->id)->whereHas('teacher')->paginate('6')->unique('teacher_id');

        return view('student.teacher-timeline',compact('purchasecourse'));
    }
    public function teachercourses(Request $request,$id){
        $teacher=User::find($id);
        if($request->has( 'filter' )){
            $search=$request->filter;
            $courses=CreateCourse::query()->whereTeacher_id($teacher->id)
            ->where('course_name', 'LIKE', "%{$search}%")
            ->orWhere('course_description', 'LIKE', "%{$search}%")->whereHas('class')
            ->get();
            $history=new History();
            $history->user_id=auth()->user()->id;
            $history->history=$search;
            $history->save();
           }else{
        $courses=CreateCourse::whereTeacher_id($teacher->id)->whereHas('class')->get();
           }
        return view('student.teacher-courses',compact('teacher','courses'));
    }
    public function teachercourseDetail($id){
        $course=CreateCourse::with('class')->find($id);
        $lectures=CourseLecture::where('course_id', $id)
        ->get('course_doc');
        $purchases=PurchaseCourse::where('course_id',$course->id)->where('user_id',auth()->user()->id)->first();
        return view('student.teacher-coursedetail',compact('course','lectures','purchases'));
    }
    public function courses(Request $request){
           if($request->has( 'filter' )){
            $search=$request->filter;
            $courses=CreateCourse::query()
            ->where('course_name', 'LIKE', "%{$search}%")
            ->orWhere('course_description', 'LIKE', "%{$search}%")->whereHas('class')
            ->get();
            $history=new History();
            $history->user_id=auth()->user()->id;
            $history->history=$search;
            $history->save();
           }else{
            $courses=CreateCourse::whereHas('class')->get();
           }
            return view('student.teacher-courses',compact('courses'));
        }

    public function courseDetail($id){
        $course=CreateCourse::find($id);
        $lectures=CourseLecture::where('course_id', $id)->get();

        return view('student.course-detail',compact('course','lectures'));
    }

    public function courseCart(){
        $cart=cart::where('user_id',\Auth::user()->id)->whereHas('course')->get();
        return view('student.cart',compact('cart'));
    }
    public function deleteCart(Request $request){
        cart::find($request->user_id)->delete();
        return response()->json(['success'=>'Cart deleted successfully!']);
    }

    public function paymentType($id){
        $cart=cart::find($id);

        return view('student.payment-type',compact('cart'));
    }
    public function addCart(Request $request){
        $cart=new cart();
        $cart->user_id=$request->user_id;
        $cart->course_id=$request->course_id;
      $cart->save();
        return back();
    }

}
