<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blog_model;

class blogController extends Controller
{

    public function blogallmain()
    {
        $blogvarall = blog_model::all();
        return view('blog', compact('blogvarall'));
    }
    public function bloglist()
    {
        $blogvar = blog_model::all();
        return view('blogList', compact('blogvar'));
    }
    public function editblog($id)
    {
        $blogidvar = blog_model::find($id);
        if ($blogidvar) {
            return view('editBlog', compact('blogidvar'));
        }
    }
}
