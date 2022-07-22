<?php

namespace App\Http\Controllers;
use App\Models\Rating;
use App\Models\studentnote;
use App\Models\Subscription;
use App\Models\User;
use App\Models\CreateCourse;
use App\Models\CourseLecture;
use App\Models\cart;
use App\Models\History;
use App\Models\PurchaseCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentDashboardController extends Controller
{
    public function index(){
        $classes = PurchaseCourse::whereUser_id(auth()->user()->id)->whereHas('class')
            ->paginate(9);

        return view('student.dashboard',compact('classes'));
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
        $notes = studentnote::whereStudent_id(\Auth::user()->id)->paginate(9);

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
        $purchasecourse = PurchaseCourse::where('user_id',auth()->user()->id)
            ->whereHas('teacher')
            ->whereHas('class')
            ->paginate('6')
            ->unique('teacher_id');

        return view('student.teacher-timeline',compact('purchasecourse'));
    }

    public function teachercourses(Request $request, $id){

        $teacher = User::find(decrypt($id));

        if($request->has( 'filter' )){
            $search=$request->filter;
            $courses=CreateCourse::query()->whereTeacher_id($teacher->id)
            ->where('course_name', 'LIKE', "%{$search}%")
            ->orWhere('course_description', 'LIKE', "%{$search}%")
                ->whereHas('class')
            ->get();
            $history=new History();
            $history->user_id=auth()->user()->id;
            $history->history=$search;
            $history->save();
           }else{
                $courses = CreateCourse::whereTeacher_id($teacher->id)
                    ->whereHas('class')
                    ->get();
                $ratings = Rating::whereteacher_id($teacher->id)
                    ->whereHas('user')
                    ->get();
           }
        return view('student.teacher_profile',compact('teacher','courses', 'ratings'));
    }

    public function rating(Request $request){

        $validator = Validator::make(request()->all(), [
           'message' => 'string',
           'rate' => 'required|numeric',
        ]);

        if($validator->fails()) {
            $errors = $validator->errors();
            return redirect()->back()->withErrors($errors);
        }

        try{
            $data = [
              'user_id' => $request->user_id,
              'teacher_id' => $request->teacher_id,
              'stars' => $request->rate,
              'message' => $request->message
            ];

            $res = (new Rating())->storeRating($data);

            if(!empty($res)){
                return redirect()->back()->with('success', 'Your review has posted');
            }else{
                return redirect()->back()->with('error', 'Something went wrong.');
            }
        } catch (\Exception $ex){
            return redirect()->back()->with('error', $ex->getMessage());
        }
    }

    public function teachercourseDetail($id){
        $course=CreateCourse::with('class')->find($id);
        $lectures=CourseLecture::where('course_id', $id)
        ->get();

        $purchases=PurchaseCourse::where('course_id',$course->id)->where('user_id',auth()->user()->id)->first();
        $ifpurchases=PurchaseCourse::where('course_id',$course->id)->where('user_id',auth()->user()->id)->exists();

        return view('student.teacher-coursedetail',compact('course','lectures','purchases','ifpurchases'));
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
            $courses=CreateCourse::whereHas('class')->paginate(9);
           }
            return view('student.teacher-courses',compact('courses'));
        }

    public function myCourses(){
        $courses = PurchaseCourse::whereUser_id(auth()->user()->id)->whereHas('course')
            ->paginate(9);
        return view('student.my-courses',compact('courses'));
    }

    public function courseDetail($id){
        $course=CreateCourse::find($id);
        $lectures=CourseLecture::where('course_id', $id)->get();

        return view('student.course-detail',compact('course','lectures'));
    }

    public function courseCart($id, $teach_id){
        $class_id = decrypt($id);
        $teacher_id = decrypt($teach_id);

        $cart=cart::where('user_id',\Auth::user()->id)->whereHas('course')->get();
        return view('student.cart', compact('cart', 'class_id', 'teacher_id'));
    }
    public function deleteCart(Request $request){
        cart::find($request->user_id)->delete();
        return response()->json(['success'=>'Cart deleted successfully!']);
    }

    public function paymentType($id, $class_id, $teach_id){
        $classId = decrypt($class_id);
        $teacher_id = decrypt($teach_id);

        $cart = cart::where('user_id',\Auth::user()->id)->get();

        return view('student.payment-type',compact('cart', 'classId', 'teacher_id'));
    }
    public function addCart(Request $request){
        if(cart::where('user_id', '=', $request->user_id)->where('course_id',$request->course_id)->exists()) {
            return back()->with('error',"Course already add in cart"); 
        }
        else{
            $cart=new cart();
            $cart->user_id=$request->user_id;
            $cart->course_id=$request->course_id;
            $cart->save();
            return back();

        }

 

        
    }

    public function changePassword(){
        return view('student.change-password');
    }

    public function myStatus(){
        $sub = (new Subscription())->with('user')->first();

        if($sub->payment_amount == '10'){
            $data = [
                'plan' => 'Basic',
                'expriy' => $sub->user->subscription_expiry_date
            ];
        }elseif ($sub->payment_amount == '25'){
            $data = [
                'plan' => 'Enterprise',
                'expriy' => $sub->user->subscription_expiry_date
            ];
        }else{
            $data = [
                'plan' => 'Free',
                'expriy' => $sub->user->subscription_expiry_date
            ];
        }
        return view('student.status', $data);
    }

//    public function teacherProfile(){
//
//        return view('student.teacher_profile');
//    }
}
