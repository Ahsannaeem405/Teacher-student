<?php

namespace App\Http\Middleware;

use App\Models\Subscription;
use Closure;
use Illuminate\Http\Request;

class SubscriptionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        //$curr_date = date_create(date('Y-m-d'));
        $data = (new Subscription())->checkSubscription();

        $exp_date = auth()->user()->subscription_expiry_date;

        //$exp = date_create($exp_date);
//        $dateDifference = date_diff($curr_date, $exp);

        $now = date('Y-m-d');
        $end = date('Y-m-d',strtotime($exp_date));

        if(!empty($data)){
            if($now <= $end){
                return $next($request);
            }else{
                return redirect()->route('teacher.price-menu')->with('error', 'Your subscription has expire, please buy it again...');
            }
        }else{
            return redirect()->route('teacher.price-menu')->with('warning', 'You have to buy a subscription first...');
        }

    }
}
