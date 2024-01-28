<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\blog_model;

class UserController extends Controller
{

    public function user(Request $request)
    {

        $role = User::where('email', $request->email)->get('role');
        $request->attributes->add(['role' => $role]);
        $blogvar = blog_model::all();
        return view('blogList', compact('blogvar'));
    }
}
