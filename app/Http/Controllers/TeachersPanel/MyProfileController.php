<?php

namespace App\Http\Controllers\TeachersPanel;

use App\Http\Controllers\Controller;
use App\Models\Subscription;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use phpDocumentor\Reflection\DocBlock\Tags\Uses;

class MyProfileController extends Controller
{
    public function update(Request $request){

        $this->validate($request, [
            'name' => 'required|string|min:3',
            'email' => 'required|string',
            'role' => 'required',

        ]);

        try{
            $data = [
              'name' => $request->name,
              'email' => $request->email,
              'role' => $request->role,
            ];
            if($request->has('prof_image') && !empty($request->prof_image)){
                $data['image'] = compressImagePHP( $request, 'prof_image' );
            }
            if(!empty($request->bio)){
                $data['bio'] = $request->bio;
            }

            if(!empty($request->stripe_public_key)){
                $data['stripe_public_key'] = $request->stripe_public_key;
            }

            if(!empty($request->stripe_secret_key)){
                $data['stripe_secret_key'] = $request->stripe_secret_key;
            }

            if(!empty($request->linkedIn_prof)){
                $data['linkedin_url'] = $request->linkedIn_prof;
            }

            $res = (new User())->updateMyProfile($data);
            if($res == '1'){
                return redirect()->back()->with('success', 'Profile updated successfully');
            }else{
                return redirect()->back()->with('error', 'Something went wrong.');
            }

        } catch (\Exception $ex){
            return redirect()->back()->with('error', $ex->getMessage());
        }
    }

    public function delete($user_id){
        try{
            $id = decrypt($user_id);

            $res = (new User())->delUser($id);
            if($res == '1'){
                return redirect()->route('user-login');
            }else{
                return redirect()->back()->with('error', 'Something went wrong.');
            }
        } catch (\Exception $ex){
            return redirect()->back()->with('error', $ex->getMessage());
        }
    }

    public function resetPassword(Request $request){

        $this->validate($request, [
           'current_password' => 'required',
           'password' => 'required|min:8|confirmed',
           'password_confirmation' => 'required'
        ]);

        try{
            $user = (new User())->getUserPassword();

            if(Hash::check($request->current_password, $user->password)){
                $data = [
                  'password' => bcrypt($request->password)
                ];

                $res = (new User())->resetPassword($data);

                if($res == '1'){
                    return redirect()->back()->with('success', 'Password has changed successfully.');
                }else{
                    return redirect()->back()->with('error', 'Something went wrong.');
                }
            }else{
                return redirect()->back()->with('error', 'Current password does not match.');
            }
        } catch (\Exception $ex){
            return redirect()->back()->with('error', $ex->getMessage());
        }
    }
}
