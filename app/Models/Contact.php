<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
      'name',
      'email',
      'subject',
      'pctextarea'
    ];

    public function storeContact($data){
        return $this->create($data);
    }

    public function getContact(){
        return $this->all();
    }

    public function getSingleContact($request_id){
        return $this->where('id', $request_id)
            ->first();
    }

    public function deleteSingleContact($request_id){
        return $this->where('id', $request_id)
            ->delete();
    }
}
