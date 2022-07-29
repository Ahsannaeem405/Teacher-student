<?php

namespace App\Http\Controllers\TeachersPanel;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class Withdraw extends Controller
{
    public function index(){
        $withdraws = (new \App\Models\Withdraw())->getWithdrawRequests();
        //dd($withdraws);
        $data = [
          'withdraws' => $withdraws
        ];

        return view('teacher.withdraw', $data);
    }

    public function withdrawPayment(Request $request){
        $this->validate($request, [
           'withdraw_amount' => 'required|numeric'
        ]);

        try{
            if($request->withdraw_amount < auth()->user()->balance){
                $data = [
                    'user_id' => auth()->user()->id,
                    'paypal_email'  => $request->paypal_email,
                    'stripe_pk'  => $request->stripe_pk,
                    'stripe_sk'  => $request->stripe_sk,
                    'withdraw_amount'  => $request->withdraw_amount,
                    'status'  => 'pending',
                ];

                $res = (new \App\Models\Withdraw())->storeRecord($data);

                if(!empty($res)){
                    $balnc = auth()->user()->balance;
                    $new_balnc = $balnc - $request->withdraw_amount;
                    (new User())->updateBalnc($new_balnc);

                    return redirect()->back()->with('success', 'Your request for withdraw has submitted.');
                } else{
                    return redirect()->back()->with('error', 'Something went wrong.');
                }
            }else{
                return redirect()->back()->with('warning', 'Withdraw amount must be less than your available balance.');
            }


        } catch(\Exception $ex){
            return redirect()->back()->with('error', $ex->getMessage());
        }
    }
}
