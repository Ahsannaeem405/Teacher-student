<?php
   
namespace App\Http\Controllers;
   
use Illuminate\Http\Request;
use Omnipay\Omnipay;
use App\Models\Payment;
use App\Models\Subscription;
use App\Models\User;
use App\Models\cart;
use App\Models\PurchaseCourse;

use Session;

class PaymentController extends Controller
{
   
    private $gateway;
   
    public function __construct()
    {
        $this->gateway = Omnipay::create('PayPal_Rest');
        $this->gateway->setClientId(env('PAYPAL_CLIENT_ID','AUVgR-fGmGuOqfOjZIsKhm65sUD6UDbbg6ag-9igPtw5_2rM1UCz82xw5dOgawM3zGOMNE1nN95L4uSv'));
        $this->gateway->setSecret(env('PAYPAL_CLIENT_SECRET','EOFcpLGqhMDIWHjKmO6Xv6f-uSjSOQRx9P7XwElW-6Mp6bi6O2Kx5XqR9nSzXpGVSPIy1KH4oyi5MWRI'));
        $this->gateway->setTestMode(true); //set it to 'false' when go live
    }
   
    /**
     * Call a view.
     */
    public function index()
    {
        return view('payment');
    }
   
    /**
     * Initiate a payment on PayPal.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function charge(Request $request)
    {
        ///dd('d');
        if($request->input('submit'))
        {
            Session::put('amount',$request->amount);
            
            Session::put('payment',"tech");

            try {
                $response = $this->gateway->purchase(array(
                    'amount' => $request->input('amount'),
                    'currency' => env('PAYPAL_CURRENCY','USD'),
                    'returnUrl' => url('success'),
                    'cancelUrl' => url('error'),
                ))->send();
            
                if ($response->isRedirect()) {
                    $response->redirect(); // this will automatically forward the customer
                } else {
                    // not successful
                    return $response->getMessage();
                }
            } catch(Exception $e) {
                return $e->getMessage();
            }
        }
    }
    public function stdcharge(Request $request)
    {
        ///dd('d');
        if($request->input('submit'))
        {

            Session::put('amount',$request->amount);
            Session::put('payment',"std");

            try {

                $response = $this->gateway->purchase(array(
                    'amount' => $request->input('amount'),
                    'currency' => env('PAYPAL_CURRENCY','USD'),
                    'returnUrl' => url('success'),
                    'cancelUrl' => url('error'),
                ))->send();
            
                if ($response->isRedirect()) {
                    $response->redirect(); // this will automatically forward the customer
                } else {
                    // not successful
                    return $response->getMessage();
                }
            } catch(Exception $e) {
                return $e->getMessage();
            }
        }
    }
    
   
    /**
     * Charge a payment and store the transaction.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function success(Request $request)
    {
        // Once the transaction has been approved, we need to complete it.
        if ($request->input('paymentId') && $request->input('PayerID'))
        {
            $transaction = $this->gateway->completePurchase(array(
                'payer_id'             => $request->input('PayerID'),
                'transactionReference' => $request->input('paymentId'),
            ));
            $response = $transaction->send();
           
            if ($response->isSuccessful())
            {
                // The customer has successfully paid.
                $arr_body = $response->getData();
                $payment_amount=Session::get('amount');
                $payment_method="Paypal";
                $check_payment=Session::get('payment');
                //dd($check_payment);
           
                // Insert transaction data into the database
                
                if($check_payment == 'std'){


                    

                    


                }
                else{
                    if($payment_amount == '10'){
                    $data = [
                        'user_id' => auth()->user()->id,
                        'payment_amount' => $payment_amount,
                        'payment_method' => $payment_method,
                        'subscription_type' => 'basic'
                    ];
                    }else{
                        $data = [
                            'user_id' => auth()->user()->id,
                            'payment_amount' => $payment_amount,
                            'payment_method' => $payment_method,
                            'subscription_type' => 'enterprise'
                        ];
                    }

                    $start = date('Y-m-d');
                    $exp = date('Y-m-d', strtotime($start. ' + 30 days'));

                    if($payment_amount == '10'){
                        $vids = (new User())->checkVids();
                        $vids_left = $vids->remaining_vids + 50;

                        $sub_exp = [
                            'subscription_expiry_date' => $exp,
                            'remaining_vids' => $vids_left,
                        ];
                    }else{
                        $sub_exp = [
                            'subscription_expiry_date' => $exp,
                        ];
                    }
                    $res = (new User())->storeExpiry($sub_exp);
                    if($res == '1'){
                        $result = (new Subscription())->storeSubscription($data);
                        if(!empty($result)){
                            return redirect()->route('teacher.dashboard')->with('success', 'Payment successful.');
                        }
                    }
                }
               
                    // return "Payment is successful. Your transaction id is: ". $arr_body['id'];
                } else {
                    return $response->getMessage();
                }
        } else {
            return 'Transaction is declined';
        }
    }
   
    /**
     * Error Handling.
     */
    public function error()
    {
        return 'User cancelled the payment.';
    }
    public function success2()
    {

                    $cart=cart::where('user_id',\Auth::user()->id)->get();
                    foreach ($cart as $key => $value) {
                        $purchase=new PurchaseCourse();
                        $purchase->user_id = \Auth::user()->id;
                        $purchase->course_id = $value->course_id;
                        $purchase->teacher_id = $value->course->teacher_id;
                        $purchase->class_id = $value->course->create_class_id;
                        $purchase->save();

                        $course_price=$value->course->price;

                        $user=User::find($value->course->teacher_id);
                        $current_earning=$user->coin;
                        $new=$current_earning+$course_price;

                        $user->coin=$new;
                        $user->update();


                        $carty=cart::find($value->id);
                        $carty->delete();
                    
                       
                    }
                    return redirect()->route('student.dashboard')->with('success', 'Payment successful.');
    }
}