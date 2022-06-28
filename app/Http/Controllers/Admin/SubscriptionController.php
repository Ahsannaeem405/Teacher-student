<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function index(){
        return view('admin.subscription.index');
    }

    public function updateSubscription(Request $request){
        dd('hello');
    }

    public function delete($id){
        dd('here');
    }
}
