<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'payment_amount',
        'payment_method',
        'subscription_type'
    ];

    public function storeSubscription($data){
        $subscrip = (new Subscription())->checkSubscription();

        if(!empty($subscrip)){
            return $this->where('user_id', auth()->user()->id)
                ->update($data);
        }else{
            return $this->create($data);
        }
    }

    public function checkSubs(){
        return $this->where('user_id', auth()->user()->id)
            ->first();
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function checkSubscription(){
        return $this->where('user_id', auth()->user()->id)
            ->first();
    }

    public function subType(){
        return $this->where('user_id', auth()->user()->id)
            ->first('subscription_type');
    }
}
