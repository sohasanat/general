<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blog_model;

class blogController extends Controller
{
    public function blogall()
    {
        $blogvar = blog_model::all();
        return view('blog', compact('blogvar'));
    }
}
