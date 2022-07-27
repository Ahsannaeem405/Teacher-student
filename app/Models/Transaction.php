<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
      'user_id',
      't_amount'
    ];

    public function transaction($data){
        return $this->create($data);
    }
}
