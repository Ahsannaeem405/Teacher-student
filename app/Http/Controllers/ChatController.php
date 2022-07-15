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
        
        
        $res = (new PurchaseCourse())->getStudentId();

        if($res->count() > 0){
            //dd('here');
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
            return redirect()->back()->with('warning', 'No record found.');
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


           // $image = !is_null(auth()->user()->image) ? auth()->user()->image : 'user-avatar.png';
            $public=URL::to('/').'/images';
            $msg=$request->message;
            event(new MyEvent($msg));
                       

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
