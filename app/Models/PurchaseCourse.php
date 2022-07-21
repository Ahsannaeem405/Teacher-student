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

    public function class()
    {
        return $this->belongsTo(CreateClass::class, 'class_id');
    }

    public function teacher()
    {
        return $this->belongsTo(User::class, 'teacher_id', 'id');
    }
    public function get_meeting()
    {
        return $this->hasMany(meeting::class, 'user_id', 'teacher_id');
    }
//    public function class()
//    {
//        return $this->belongsTo(CreateClass::class, 'teacher_id', 'user_id');
//    }
    public function studentuser()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function getStudentId(){
        return $this->where('teacher_id', auth()->user()->id)
            ->get()
            ->unique('user_id');
    }
    public function getTeacherId(){
        return $this->where('user_id', auth()->user()->id)
            ->get()
            ->unique('teacher_id');
    }
}
