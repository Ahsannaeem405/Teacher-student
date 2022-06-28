<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CreateCourse extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
      'course_image',
      'course_name',
      'course_date',
      'course_time',
      'course_doc',
      'class_name_id',
      'course_description'
    ];

    public function createCourse($data){
        return $this->create($data);
    }
}
