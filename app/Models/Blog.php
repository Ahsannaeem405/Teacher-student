<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
      'blog_title',
      'blog_description',
      'blog_cover',
    ];

    public function getBlog(){
        return $this->all();
    }

    public function store($data){
        return $this->create($data);
    }
}
