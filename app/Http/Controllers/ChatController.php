<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Admin\StudentController;
use App\Models\Chat;
use App\Models\PurchaseCourse;
use App\Models\User;
use Illuminate\Http\Request;
use URL;
use App\Events\MyEvent;

class ChatController extends Controller
{
    public function chat(){
        if(auth()->user()->role=="2")
        {
            $res = (new PurchaseCourse())->getStudentId();

            if($res->count() > 0){
                foreach ($res as $record){
                    $std = (new User())->getStudent($record->user_id);
                }

                if(request()->has('id')){
                    $id = decrypt(request()->get('id'));

                    $chats = (new Chat())->with('student')
                        ->whereIn('to_id',[auth()->user()->id, $id])
                        ->whereIn('from_id',[auth()->user()->id, $id])
                        ->orderBy("created_at")
                        ->get();

                    $data = [
                        'messages' => $chats,
                        'users' => $std
                    ];

                }else{
                    $data = [
                        'users' => $std
                    ];
                }
                return view('chat.chat', $data);
            }else{
                return view('chat.chat');
            }

        }
        if(auth()->user()->role=="3")
        {
            $res = (new PurchaseCourse())->getTeacherId();

            if($res->count() > 0){
                foreach ($res as $record){
                    $std = (new User())->getStudent($record->teacher_id);
                }

                if(request()->has('id')){
                    $id = decrypt(request()->get('id'));

                    $chats = (new Chat())->with('student')
                        ->whereIn('to_id',[auth()->user()->id, $id])
                        ->whereIn('from_id',[auth()->user()->id, $id])
                        ->orderBy("created_at")
                        ->get();

                    $data = [
                        'messages' => $chats,
                        'users' => $std
                    ];

                }else{
                    $data = [
                        'users' => $std
                    ];
                }
                return view('chat.chat', $data);
            }else{
                return view('chat.chat');
            }
        }
  }

    public function storeChat(Request $request){
       // dd($request->all());
        try{
            $id = decrypt($request->user_id);

            $data = [
                'message' => $request->message,
                'to_id' => $id,
                'from_id' => auth()->user()->id
            ];

            $res = (new Chat())->storeChat($data);



            $msg=$res;
            $name=$msg->get_user->name;
            $role=$msg->student->role;
            $image = !is_null($msg->get_user->image) ? $msg->get_user->image : 'user-avatar.png';
            $public_img=URL::to('/').'/images/'.$image;
            $date=date('Y-m-d H:i A', strtotime($msg->created_at));
            event(new MyEvent($res,$name,$role,$public_img,$date,$id));


            if(!empty($res)){
                //return response()->json(['msg'=>$res,'name'=>auth()->user()->name,'public'=>$public]);
                return true;
            }else{
                return false;
            }
        } catch (\Exception $ex){
            return redirect()->back()->with('error', $ex->getMessage());
        }
    }
}
