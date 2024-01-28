<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\job_model;
use App\Models\detailjob_model;
use App\Models\jobexpertise_model;
use App\Models\jobskills_model;

class cmsdefintionjobcontroller extends Controller
{
    public function jobs()
    {
        $jobsvar = detailjob_model::all();
        return view('c-jobList', compact('jobsvar'));
    }

    public function resumes()
    {
        $jobsvar = job_model::all();
        return view('c-jobList', compact('jobsvar'));
    }
}
