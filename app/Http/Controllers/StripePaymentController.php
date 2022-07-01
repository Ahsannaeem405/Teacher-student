<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use App\Models\User;
use App\Models\cart;
use App\Models\PurchaseCourse;
use Illuminate\Http\Request;
use Session;
use Stripe;

class StripePaymentController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function stripe(Request $request)
    {
        //dd($request->all());

        $data = [
          'payment_amount'  => $request->payment_plan,
          'payment_method' => $request->payment_method
        ];

        return view('user/payment', $data);
    }

    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {
        $payment_amount = str_replace('$', '', $request->amount);
        $payment_method = $request->payment_method;

        Stripe\Stripe::setApiKey(env('STRIPE_SECRET','sk_test_51Kh9uAFBFsCMdULhVtPQxp0NOArxMFzdQ6qroS5jZFettctGfyVPc5WPmT6b1hGimRW09adqa3lndHnywhsbBqYW00K8eyxFsu
        '));

        $pay =Stripe\Charge::create ([
                "amount" => $payment_amount * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Payment successfully"
        ]);

        if($pay->description == 'Payment successfully'){
            $data = [
                'user_id' => auth()->user()->id,
                'payment_amount' => $payment_amount,
                'payment_method' => $payment_method
            ];

            $start = date('Y-m-d');
            $exp = date('Y-m-d', strtotime($start. ' + 30 days'));

            $res = (new User())->storeExpiry($exp);
            if($res == '1'){
                $result = (new Subscription())->storeSubscription($data);
//            if(!empty($result)){
//
//            }
            }

            \Session::flash('success', 'Payment successful!');

            return redirect()->route('teacher.dashboard');
        }
    }
    public function studentstripe(Request $request)
    {
       
$teacher=User::find($request->teacher_id);
        $data = [
          'payment_amount'  => $request->amount,
          'teacher'=>$teacher,
          'cart_id'=>$request->cart_id,
          'payment_method' => $request->payment_method
        ];

        return view('student/payment', $data);
    }
    public function stripestudentPost(Request $request)
    {
        $payment_amount = str_replace('$', '', $request->amount);
        $teacher=User::find($request->teacher_id);
$cart=cart::find($request->cart_id);
        Stripe\Stripe::setApiKey($teacher->stripe_public_key);

        $pay =Stripe\Charge::create ([
                "amount" => $payment_amount * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Payment successfully"
        ]);

        if($pay->description == 'Payment successfully'){
           $purchase=new PurchaseCourse();
           $purchase->user_id=\Auth::user()->id;
           $purchase->course_id=$cart->course_id;
           $purchase->teacher_id=$cart->teacher_id;

            \Session::flash('success', 'Payment successful!');

            return redirect()->route('student.dashboard');
        }
    }
}
