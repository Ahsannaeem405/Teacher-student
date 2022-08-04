<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseLecture extends Model
{
    use HasFactory;

    protected $table = 'course_lectures';
    protected $fillable = [
      'course_id',
      'course_doc',
      'class_title',
      'course_type'
    ];

    protected $guarded = [];


    public function course(){
        return $this->belongsTo(CreateCourse::class);
    }

    public function storeLectures($course_id, $vid){
        foreach ($vid as $video){
            $lec = $this->create([
               'course_id' => $course_id,
               'course_doc' => $video
            ]);
        }
        return $lec;
    }
    public function storeSingleLectures($data){
        return $this->create($data);
    }

    public function getLectures($id){
        return $this->where('course_id', $id)
            ->get();
    }

    public function getVids($id)
    {
        return $this->where('course_id', $id)
            ->get();
    }

    public function updateLectures($course_id, $vid){
        foreach ($vid as $video){
            $lec = $this->where('course_id', $course_id)
            ->update([
                'course_id' => $course_id,
                'course_doc' => $video
            ]);
        }
        return $lec;
    }

    public function getVides($user_id){
        return $this->where('course_id', $user_id)
            ->first('course_doc');
    }

    public function updateSingleLectures($data, $id){
        return $this->where('id', $id)
            ->update($data);
    }

    public function delLecture($lec_id){
        return $this->where('id', $lec_id)
            ->delete();
    }
}
