<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\job_model;
use App\Models\detailjob_model;

class job_contrller extends Controller
{
    public function jobs()
    {
        $jobsvar = job_model::all();
        return view('job', compact('jobsvar'));
    }

    public function jobdeails()
    {

        return view('detail-job');
    }
}
