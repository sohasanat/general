<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;




class Company_contrller extends Controller
{
    public function companysender()
    {
     $companyvar = Company::all();
     return view('main', compact('companyvar'));
    }
}
