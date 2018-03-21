<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    function view()
    {
        $blogs = Blog::with('user')->get();
        return view('blog', compact('blogs'));
    }

    function edit()
    {
        return view('blogTest');
    }

    function create() {
        $user = Auth::user();

        $blog = new Blog;
        $blog->title = $_POST['title'];
        $blog->html_content = $_POST['blog'];
        $blog->user_id = $user->id;
        $blog->save();
    }

}
