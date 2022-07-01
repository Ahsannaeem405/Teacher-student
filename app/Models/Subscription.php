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
        'payment_method'
    ];

    public function storeSubscription($data){
        return $this->create($data);
    }

    public function checkSubscription(){
        return $this->where('user_id', auth()->user()->id)
            ->first();
    }
}
