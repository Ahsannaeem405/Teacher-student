<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class AdminController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }
    public function getUsers(){
        //
    }

    public function getTechers(){
        //
    }
}
