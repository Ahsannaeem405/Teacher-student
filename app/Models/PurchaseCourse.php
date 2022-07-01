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
    
}
