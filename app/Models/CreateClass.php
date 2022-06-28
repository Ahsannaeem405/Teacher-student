<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CreateClass extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'class_name',
        'class_title',
        'class_description',
        'class_date',
        'class_time',
        'class_image',
        'teacher_name'
    ];

    public function getClasses(){
        return $this->all();
    }

    public function createClass($data){
        return $this->create($data);
    }

    public function getSingleClass($id){
        return $this->where('id', $id)
            ->first();
    }

    public function updateClass($data, $id){
        return $this->where('id', $id)
            ->update($data);
    }

    public function delClass($id){
        return $this->where('id', $id)
            ->delete();
    }

    public function getClassesIdName(){
        return $this->get(['id', 'class_name']);
    }
}
