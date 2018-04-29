<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Image;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    function view(){
        return view('blog');
    }

    function get() {
        $blogs = Blog::with('user')->with('image')->orderBy('order', 'asc')->get();
        return $blogs;
    }


    function show($title) {
        $blog = Blog::where('title', '=', $title)->get();
        return $blog;
    }

    function edit() {
        return view('blogEditor');
    }

    function create()
    {
        $user = Auth::user();

        $image = Image::where('path', '=', $_POST['path'])->first();
        $lastBlog = Blog::orderBy('order', 'desc')->first();

        $blog = new Blog;
        $blog->title = $_POST['title'];
        $blog->html_content = $_POST['blog'];
        if ($image) {
            $blog->image_id = $image->id;
        }
        if ($lastBlog) {
            $blog->order = $lastBlog->order + 1;
        }
        else {
            $blog->order = 1;
        }

        $blog->user_id = $user->id;
        $blog->save();

        return $blog;
    }

}
