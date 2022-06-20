<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\Uses;

class UserController extends Controller
{
    public function index(){
        //
    }

    public function store(Request $request){
        //dd($request->all());

//        $this->validate($request,[
//            'first_name' => 'required|string|between:3,20',
//            'last_name' => 'required|string|between:3,20',
//            'email' => 'unique:users,email',
//            'password' => 'required|min:6|string',
//            'role' => 'required',
//        ]);
//
//        try{
//
//            $data = [
//                'first_name' => $request->first_name,
//                'last_name' => $request->last_name,
//                'email' => $request->email,
//                'password' => bcrypt($request->password),
//                'role' => $request->role,
//                'status' => '1'
//            ];
//
//            $result = (new User())->getregister($data);
//
//            if(!empty($result)){
//                return login($result);
//            }
//
//        } catch (\Exception $ex){
//            return $ex->getMessage();
//        }
    }
}
