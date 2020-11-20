<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Models
use App\Models\Newsblog;


class GLILController extends Controller
{
    public function blogs(){
        $blogs = Newsblog::where(['type' => 'blog','status' => 1])->get();
        $recentBlogs = Newsblog::where(['type' => 'blog','status' => 1])->take(5)->get();
        return view("pages.blog.index", compact('blogs', 'recentBlogs'));
    }
    public function blog($locale, $id){
        $blog = Newsblog::where(['id' => $id, 'type' => 'blog','status' => 1])->first();
        $recentBlogs = Newsblog::where(['type' => 'blog','status' => 1])->take(5)->get();
        $blog->views = $blog->views + 1;
        $blog->update();
        return view("pages.blog.detail", compact('blog', 'recentBlogs'));
    }
}
