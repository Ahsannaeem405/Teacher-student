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
      'price',
      'course_date',
      'teacher_id',
      'course_time',
      'course_doc',
      'create_class_id',
      'course_description'
    ];

    public function createCourse($data){
        return $this->create($data);
    }

    public function getCourses(){
        return $this->join('create_classes', 'create_courses.create_class_id', '=', 'create_classes.id')
            ->select('create_courses.*', 'create_classes.id AS class_id', 'create_classes.class_name',
             'create_classes.class_title')
            ->where('create_courses.teacher_id', auth()->user()->id)
            ->paginate(9);
    }

    public function lectures(){
        return $this->hasMany(CourseLecture::class, 'course_id');
    }

    public function getSingleCourse($id){
        return $this->leftJoin('create_classes', 'create_courses.create_class_id', '=', 'create_classes.id')
            ->select('create_courses.*', 'create_classes.id AS class_id', 'create_classes.class_name',
                'create_classes.teacher_name',
                'create_classes.class_date', 'create_classes.class_time')
            ->where('create_courses.id', $id)
            ->first();
    }
    public function class()
    {
        return $this->belongsTo(CreateClass::class, 'create_class_id', 'id');
    }
    public function cart()
    {
        return $this->hasOne(cart::class, 'course_id', 'id')->where('user_id',auth()->user()->id);
    }

    public function editCourse($id){
        return $this->where('id', $id)
            ->first();
    }

    public function updateCourse($data, $id){
        return $this->where('id', $id)
            ->update($data);
    }

    public function deleteCourse($course_id){
        return $this->where('id', $course_id)
            ->delete();
    }

    public function ratings(){
        return $this->belongsTo(Rating::class, 'teacher_id', 'teacher_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'id');
    }

    public function purchaseCourse(){
        return $this->hasMany(PurchaseCourse::class, 'course_id');
    }

    public function getCourseDownloads($id){
        $downloads = $this->where('id', $id)
                    ->first('course_dowloads');
        if($downloads->course_dowloads == null){
            $downloads = 0;
            $new_download = $downloads + 1;
        }else{
            $new_download = $downloads->course_dowloads + 1;
        }

        $data = [
          'course_dowloads' => $new_download
        ];

        return $this->where('id', $id)
            ->update($data);
    }
}
