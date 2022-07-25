<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class MainBlogController extends Controller
{
    public function blogDetail($id){
        $blog_id = decrypt($id);
        $res = (new Blog())->getBlogData($blog_id);
        $recent = (new Blog())->getRecent();

        $data = [
          'blog' => $res,
          'recents' => $recent
        ];

        return view('blog_detail', $data);
    }
}
