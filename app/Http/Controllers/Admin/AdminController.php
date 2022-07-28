<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Withdraw;
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
        try{
            $old_password = auth()->user()->password;
            if($request->current_password !=null)
            {
                if(Hash::check($request->current_password, $old_password)){
                    if($request->new_password == $request->confirm_password){

                        $data = [
                            'name' => $request->name,
                            'email' => $request->email,
                            'stripe_secret_key' => $request->stripe_secret_key,
                            'stripe_public_key' => $request->stripe_public_key,
                            'password' => bcrypt($request->new_password),
                        ];

                        $res = (new User())->updateProfile($data, $request->user_id);
                        if($res == '1'){
                        return redirect()->back()->with('success', 'Data updated successfully.');
                        } else{
                            return redirect()->back()->with('error', 'Something went wrong.');
                        }
                    }
                    else{
                        return redirect()->back()->with('error', 'New password is not match with confirm password ');
                    }

                }else{
                    return redirect()->back()->with('error', 'Incorrect old password.');
                }
            }
            else{
                    $data = [
                        'name' => $request->name,
                        'email' => $request->email,
                        'stripe_secret_key' => $request->stripe_secret_key,
                        'stripe_public_key' => $request->stripe_public_key,
                    ];
                    $res = (new User())->updateProfile($data, $request->user_id);
                    return back()->with('success', 'Data updated successfully.');
            }

        } catch (\Exception $ex){
            return redirect()->back()->with('error', $ex->getMessage());
        }
    }

    public function withdrawRequests(){
        $requests = (new Withdraw())->getRequests();
        $data = [
            'requests' => $requests
        ];

        return view('admin.withdraw_requests.view-requests', $data);
    }

    public function withdrawRequestStatus($status, $id){
        try{
            $req_status = decrypt($status);
            $req_id = decrypt($id);
            $res = (new Withdraw())->updateStatus($req_status, $req_id);

            if($res == '1'){
                return redirect()->back()->with('success', 'Status updated sccuessfully.');
            }else{
                return redirect()->back()->with('error', 'Something went wrong');
            }
        } catch(\Exception $ex){
            return redirect()->back()->with('error', $ex->getMessage());
        }
    }

    public function paymentWithdraw(Request $request){
        $this->validate($request, [
           'paypal_email' => 'required|string',
           'withdraw_amount' => 'required|numeric',
        ]);

        try{
            $data = [
                'paypal_email' => $request->paypal_email,
                'withdraw_amount' => $request->withdraw_amount
            ];

            return view('admin.withdraw_requests.payment-type', $data);

        } catch (\Exception $ex){
            return redirect()->back()->with('error', $ex->getMessage());
        }
    }
}
