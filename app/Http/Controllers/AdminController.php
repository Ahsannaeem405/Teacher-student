<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class AdminController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }
    public function getUsers(){
        try{
            $users = (new User())->getUser();

            $data = [
                'users' => $users
                ];

            if(!empty($data)){
                return view('admin.student.index', $data);
            }
            else{
                return redirect()->back()->with('error','No record found.');
            }
        } catch (\Exception $ex){
            return redirect()->back()->with('error', $ex->getMessage());
        }
    }

    public function getTechers(){
        try{
            $users = (new User())->getTechers();

            $data = [
                'users' => $users
            ];

            if(!empty($data)){
                return view('admin.teachers.index', $data);
            }
            else{
                return redirect()->back()->with('error','No record found.');
            }
        } catch (\Exception $ex){
            return redirect()->back()->with('error', $ex->getMessage());
        }
    }
}
