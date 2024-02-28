<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\job_model;
use App\Models\detailjob_model;
use App\Models\jobexpertise_model;
use App\Models\jobskills_model;
use App\Models\User;

class job_contrller extends Controller
{
    public function jobs()
    {
        $id = session('id');
        $username = User::find($id);
        $jobsvar = detailjob_model::all();
        return view('job', compact('jobsvar', 'username'));
    }

    public function creatjob()
    {
        return view('c-jobCreate');
    }

    public function jobdeails($id)
    {
        $id = session('id');
        $username = User::find($id);
        $jobsdetails = detailjob_model::find($id);
        if ($jobsdetails) {
            $skillsvar = jobskills_model::where('job_id', $id)->get('skillsDescription');
            $expertisevar = jobexpertise_model::where('job_id', $id)->get('expertiseDescription');

            return view('detail-job', compact('jobsdetails', 'skillsvar', 'expertisevar', 'username'));
        }
    }

    public function jobrequest(Request $request)
    {
        $role = session('role');
        if ($role === 'Customer') {
            $opportunity = new job_model;
            $opportunity->name = $request->name;
            $opportunity->phone = $request->phone;
            $opportunity->email = $request->email;
            $opportunity->date = $request->date;
            $opportunity->definitionjobs_id = $request->param_name;
            $jobName = detailjob_model::where('id', $request->param_name)->pluck('title')->first();
            $opportunity->jobname = $jobName;


            if ($request->file('resume')) {
                $file = $request->file('resume');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('assets/resume'), $filename);
                $opportunity['resume'] = $filename;
            }
            $opportunity->save();
            session()->flash('message', 'درخواست شما با موفقیت ثبت شد');
            return redirect()->back();
        } else {
            session()->flash('message1', ' قبل از درخواست باید  در سایت ثبت نام کنید ');
            return redirect()->back();
        }
    }
}
