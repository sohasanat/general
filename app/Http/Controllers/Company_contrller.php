<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\blog_model;




class Company_contrller extends Controller
{
    public function companysender()
    {
        $blogmainall = blog_model::take(4)->get();
        $companyvar = Company::all();
        return view('main', compact('companyvar', 'blogmainall'));
    }
}
