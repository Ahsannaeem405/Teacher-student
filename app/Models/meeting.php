<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class meeting extends Model
{
    use HasFactory;
    public function get_meeting()
    {
        return $this->hasMany(PurchaseCourse::class, 'teacher_id', 'user_id');
    }
    public function teacher()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
