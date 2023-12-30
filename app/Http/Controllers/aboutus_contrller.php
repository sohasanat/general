<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\aboutus_model;
use App\Models\members_model;

class aboutus_contrller extends Controller
{
    public function aboutus()
    {
        $allabouts = aboutus_model::all();
        $allmembers = members_model::all();
        return view('about-us', compact('allabouts', 'allmembers'));
    }
}
