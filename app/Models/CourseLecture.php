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
        'course_doc'
    ];

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
            ->get('course_doc');
    }
}
