<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseCourse extends Model
{
    use HasFactory;

    public function course()
    {
        return $this->belongsTo(CreateCourse::class, 'course_id', 'id');
    }

    public function getStudentId(){
        return $this->where('teacher_id', auth()->user()->id)
            ->get()
            ->unique('user_id');
    }
}
