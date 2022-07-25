<?php

namespace App\Http\Controllers\TeachersPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class History extends Controller
{
    public function history(){
        $history= \App\Models\History::whereUser_id(auth()->user()->id)
            ->orderBy('id', 'DESC')
            ->get();
        return view('teacher.d-history',compact('history'));
    }

    public function deletehistory(Request $request){
        \App\Models\History::find($request->user_id)->delete();
        return response()->json(['success'=>'History deleted successfully!']);
    }
}
