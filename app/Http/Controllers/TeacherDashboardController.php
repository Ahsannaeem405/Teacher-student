<?php

namespace App\Http\Controllers;

use App\Models\CourseLecture;
use App\Models\CreateClass;
use App\Models\CreateCourse;
use App\Models\PurchaseCourse;
use App\Models\studentnote;
use App\Models\Subscription;
use App\Models\User;

use Illuminate\Http\Request;

class TeacherDashboardController extends Controller
{
    public function index(){
        $record = (new CreateClass())->getClasses();
        $data = [
          'classes' => $record
        ];
        return view('teacher.dashboard', $data);
    }

    public function myProfile(){
        return view('teacher.my-profile');
    }

    public function createCourse(){
        //dd(1);
        $record = (new CreateClass())->getClassesIdName();

        $data = [
            'classes' => $record
        ];
        return view('teacher.create-course', $data);
    }

    public function myCourse(){
        $res = (new CreateCourse())->getCourses();
        $data = [
            'courses' => $res
        ];

        return view('teacher.my-courses', $data);
    }

    public function myStudents(){
        $cource = PurchaseCourse::
        select([\DB::raw('DISTINCT(user_id)'), 'course_id','teacher_id','class_id'])
        -> where('teacher_id',auth()->user()->id)
        ->paginate(50);

        return view('teacher.my-students',compact('cource'));
    }

    public function priceMenu(){
        return view('teacher.price-menu');
    }

    public function paymentType($type){
        $check_sub = (new Subscription())->checkSubscription();
        $vids = (new User())->checkVids();
        $plan_amount = decrypt($type);

        $now = date('Y-m-d');
        $end = date('Y-m-d',strtotime($vids->subscription_expiry_date));

        if(empty($check_sub)){
            $data = [
                'amount' => $plan_amount
            ];
            return view('teacher.payment-type', $data);

        }elseif($vids->remaining_vids < 1 || $now >= $end){
            $data = [
                'amount' => $plan_amount
            ];
            return view('teacher.payment-type', $data);
        }
        else{
            return redirect()->back()->with('warning', 'You already have a subscription plan.');
        }
    }

    public function paymentSubmission(){

        return view('teacher.payment-successful');
    }

    public function courseDetail($course_id){
        $id = decrypt($course_id);

        $res = (new CreateCourse())->getSingleCourse($id);

        $class = (new CreateClass())->getRelatedClasses($res->create_class_id);

        $lec = (new CourseLecture())->getLectures($id);

        $data = [
          'course' => $res,
          'lectures' => $lec,
          'classes' => $class
        ];
        return view('teacher.course-detail', $data);
    }

    public function notes(){
        $notes = (new studentnote())->getNotes();
        $data = [
          'notes' => $notes
        ];

        return view('teacher.notes', $data);
    }

    public function createNotes(){
        return view('teacher.new-notes');
    }

    public function storeNotes(Request $request){

        $this->validate($request, [
            'note_name' => 'required|string',
        ]);

        try{
            $data = [
                'student_id'  => auth()->user()->id,
                'title'  => $request->note_name,
                'note_description'  => $request->describe_note,
            ];

            $note = (new studentnote())->storeNotes($data);

            if(!empty($note)){
                return redirect()->route('teacher.t-notes')->with('success',"Note Create Successfully.");
            }else{
                return redirect()->back()->with('error',"Something went wrong.");
            }
        } catch (\Exception $ex){
            return redirect()->back()->with('error', $ex->getMessage());
        }
    }

    public function editNotes($id){
        $note = (new studentnote())->editNote($id);
        if(!empty($note)){
            $data = [
              'note' => $note
            ];

            return view('teacher.edit-note', $data);
        }else{
            return redirect()->back()->with('error', 'Something went wrong.');
        }
    }

    public function updateNotes(Request $request, $note_id){
        $id = decrypt($note_id);

        $this->validate($request, [
            'notes_name' => 'required|string',
        ]);

        try{
            $data = [
                'title'  => $request->notes_name,
                'note_description'  => $request->describe_notes,
            ];

            $note = (new studentnote())->updateNote($data, $id);
            if($note == '1'){
                return  redirect()->back()->with('success',"Note Updated Successfully.");
            }else{
                return redirect()->back()->with('error',"Something went wrong.");
            }
        } catch (\Exception $ex){
            return redirect()->back()->with('error', $ex->getMessage());
        }
    }

    public function deleteNotes($note_id){
        $id = decrypt($note_id);

        $del = (new studentnote())->delNote($id);

        if($del == '1'){
            return response()->json(['success'=>'Note deleted successfully.']);
        }else{
            return redirect()->back()->with('error', 'Something went wrong.');
        }
    }

    public function createBlog(){
        return view('teacher.create-blog');
    }

    public function createClass(){
        return view('teacher.create-class');
    }

    public function uploadProfile(){
        $res = (new User())->getTeacherData();
        $data = [
          'profile' => $res
        ];

        return view('teacher.upload-profile', $data);
    }

    public function status(){
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

        return view('teacher.status', $data);
    }

    public function changePassword(){
        return view('teacher.change-password');
    }

    public function trialMenu($type){
        $check_sub = (new Subscription())->checkSubscription();
        $expiry = (new User())->getExpiry();

        $current_date = date('Y-m-d');
        $exp_date = date('Y-m-d', strtotime($expiry));

        if(empty($check_sub) || $current_date < $exp_date){
            $plan_type = decrypt($type);

            $start = date('Y-m-d');
            $exp = date('Y-m-d', strtotime($start. ' + 7 days'));

            $sub_exp = [
                'subscription_expiry_date' => $exp,
                'remaining_vids' => '10',
            ];

            $sub = [
                'user_id' => auth()->user()->id,
                'payment_method' => $plan_type,
                'subscription_type' => 'trial',
            ];

            $res = (new User())->storeExpiry($sub_exp);

            if($res == '1'){
                $result = (new Subscription())->storeSubscription($sub);
                if(!empty($result)){
                    return redirect()->route('teacher.dashboard')->with('success', 'Your free trial has started now.');
                }
            }
        }
        else{
            return redirect()->back()->with('warning', 'You already have a subscription plan.');
        }
    }
}
