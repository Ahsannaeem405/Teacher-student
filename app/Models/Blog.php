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
      'email'
    ];

    public function getBlog(){
        return $this->all();
    }

    public function store($data){
        return $this->create($data);
    }

    public function edit($blog_id){
        return $this->where('id', $blog_id)
            ->first();
    }

    public function blogUpdate($data, $blog_id){
        return $this->where('id', $blog_id)
            ->update($data);
    }

    public function deleleBlog($blog_id){
        return $this->where('id', $blog_id)
            ->delete();
    }

    public function getBlogs(){
        return $this->orderBy('created_at', 'DESC')
            ->paginate(1);
    }

    public function getRecent(){
        return $this->orderBy('created_at', 'DESC')
            ->take(3)
            ->get();
    }

    public function getBlogData($blog_id){
        return $this->where('id', $blog_id)
            ->first();
    }
}
