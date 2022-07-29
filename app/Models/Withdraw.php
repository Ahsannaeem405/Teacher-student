<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Withdraw extends Model
{
    use HasFactory;

    protected $fillable = [
      'paypal_email',
      'user_id',
      'withdraw_amount',
      'stripe_pk',
      'stripe_sk',
      'status'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function storeRecord($data){
        return $this->create($data);
    }

    public function getRequests(){
        return $this->wherehas('user')
            ->get();
    }

    public function updateStatus($req_status, $req_id){
        return $this->where('id', $req_id)
            ->update(['status' => $req_status]);
    }

    public function getWithdrawRequests(){
        return $this->where('user_id', auth()->user()->id)
            ->get();
    }
}
