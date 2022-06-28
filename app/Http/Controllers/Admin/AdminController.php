<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }

    public function myProfile(){
        $res = (new User())->getData();

        $data =[
          'record' => $res
        ];
        return view('admin.admin-profile.my-profile', $data);
    }

    public function profileUpdate(Request $request){

        $this->validate($request, [
            'first_name' => 'required|string|between:3,20',
            'email' => 'required|string',
            'password' => 'required',
            'new_password' => 'required',
        ]);

        try{
            $data = [
                'first_name' => $request->first_name,
                'email' => $request->email,
                'password' => bcrypt($request->new_password),
            ];

            $old_password = auth()->user()->password;

            if(Hash::check(request('password'), $old_password)){
                $res = (new User())->updateProfile($data, $request->user_id);
                if($res == '1'){
                    return redirect()->back()->with('success', 'Data updated successfully.');
                } else{
                    return redirect()->back()->with('error', 'Something went wrong.');
                }
            }else{
                return redirect()->back()->with('error', 'Incorrect old password.');
            }

        } catch (\Exception $ex){
            return redirect()->back()->with('error', $ex->getMessage());
        }
    }
}
