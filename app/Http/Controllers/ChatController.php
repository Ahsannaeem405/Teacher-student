<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Admin\StudentController;
use App\Models\Chat;
use App\Models\PurchaseCourse;
use App\Models\User;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function chat(){
        $res = (new PurchaseCourse())->getStudentId();
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
        }
        else{
            $data = [
                'users' => $std
            ];
        }

        return view('chat.chat', $data);
    }

    public function storeChat(Request $request){
       // dd($request->all());
        try{
            //$id = decrypt(request()->get('id'));

            $data = [
                'message' => $request->message,
                //'to_id' => $id,
                'from_id' => auth()->user()->id
            ];
dd($data);
            $res = (new Chat())->storeChat($data);

            if(!empty($res)){
                return true;
            }else{
                return false;
            }
        } catch (\Exception $ex){
            return redirect()->back()->with('error', $ex->getMessage());
        }
    }
}
