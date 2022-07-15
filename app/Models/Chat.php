<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;

    protected $fillable = [
      'message',
      'to_id',
      'from_id'
    ];

    public function getChats($id){
        $users =(new User())->find($id);

        return $this->whereIn('to_id',[auth()->user()->id, $users->id])
            ->whereIn('from_id',[auth()->user()->id, $users->id])
            ->orderBy("created_at")
            ->get();
    }

    public function student(){
        return $this->belongsTo(User::class, 'to_id');
    }

    public function teacher(){
        return $this->belongsTo(User::class, 'from_id');
    }
    public function get_user(){
        return $this->belongsTo(User::class, 'from_id');
    }

    public function storeChat($data){
        return $this->create($data);
    }
}
