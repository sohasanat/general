<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\blog_model;




class Company_contrller extends Controller
{
    public function companysender()
    {


        $role = session('role');
        if ($role === 'Admin') {
            $blogvar = blog_model::all();
            return view('blogList', compact('blogvar'));
        } elseif ($role === 'Customer') {
            $blogmainall = blog_model::take(4)->get();
            $companyvar = Company::all();
            session()->flash('message', 'خوش امدید ');
            return view('main', compact('companyvar', 'blogmainall'));
        } else {
            $blogmainall = blog_model::take(4)->get();
            $companyvar = Company::all();

            return view('main', compact('companyvar', 'blogmainall'));
        }
    }
    public function main()
    {

        $blogmainall = blog_model::take(4)->get();
        $companyvar = Company::all();

        return view('main', compact('companyvar', 'blogmainall'));
    }

    public function loginview()
    {



        return view('login');
    }
}
