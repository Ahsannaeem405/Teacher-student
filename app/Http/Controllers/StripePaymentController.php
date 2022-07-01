<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use App\Models\User;
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
     * @return \Illuminate\Http\RedirectResponse
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

            $data = [
                'subscription_expiry_date' => $exp
            ];
            $res = (new User())->storeExpiry($data);
            if($res == '1'){
                $result = (new Subscription())->storeSubscription($data);
                if(!empty($result)){
                    return redirect()->route('teacher.dashboard')->with('success', 'Payment successful.');
                }
            }
        }
    }
}
