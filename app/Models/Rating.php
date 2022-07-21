<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    protected $fillable = [
      'user_id',
      'teacher_id',
      'stars',
      'message',
    ];

    public function storeRating($data){
        return $this->create($data);
    }

//    public function teacher(){
//        return $this->belongsTo(User::class, 'teacher_id', 'id');
//    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
//    public function getRatings($id){
//        return $this->where('teacher_id', $id)
//            ->get();
//    }

}
