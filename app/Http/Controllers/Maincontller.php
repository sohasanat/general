<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class Maincontller extends Controller
{
    public function Main(){
        $mainparametr = Company::first();
        return view('main',compact('mainparametr'));
    }
}
 