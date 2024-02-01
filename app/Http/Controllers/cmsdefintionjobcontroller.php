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
        $alljobsvar = job_model::all();
        return view('c-resumeList', compact('alljobsvar'));
    }

    public function resumesdatails($resume)
    {

        $path = public_path('assets/resume/' . $resume);
        return response()->file($path);
    }


    public function cmsjobex(Request $request)
    {
        $liData = $request->input('liData');
        $ex = new jobexpertise_model;
        $ex->expertiseDescription = $request->input('liData');
        $ex->save();
    }





    public function cmsjobsave(Request $request)
    {
        $expertise = explode(',', $request->expertise);
        $skills = explode(',', $request->skills);

        $detailjob = new detailjob_model;
        $detailjob->title = $request->title;
        $detailjob->Description = $request->Description;

        $detailjob->save();
        $detailjobid = detailjob_model::latest('id')->value('id');
        // $idlast = $saveproid->id;
        foreach ($expertise as $item) {
            $expertisejob = new jobexpertise_model;
            $expertisejob->expertiseDescription = $item;
            $expertisejob->job_id = $detailjobid;
            $expertisejob->save();
        }
        foreach ($skills as $item) {
            $skillsjob = new jobskills_model;
            $skillsjob->skillsDescription = $item;
            $skillsjob->job_id = $detailjobid;
            $skillsjob->save();
        }


        // $saveimg = new images_model;
        // if ($request->file('image')) {
        //     $file = $request->file('image');
        //     $filename = date('YmdHi') . $file->getClientOriginalName();
        //     $file->move(public_path('assets/images/blogimages'), $filename);
        //     $saveimg['image'] = $filename;
        // }
        // $saveimg->products_id = Products_model::latest()->first('id');

        session()->flash('message', ' شغل با موفقیت ثبت شد');
        return redirect()->back();
    }




    public function cmsjobedit($id)
    {
        $editjob = detailjob_model::find($id);

        $experiense = jobexpertise_model::where('job_id', $id)->get();

        $skills = jobskills_model::where('job_id', $id)->get();

        return view('c-jobEdit', compact('editjob', 'experiense', 'skills'));
    }


    public function cmsjobeditsave(Request $request, $id)
    {
        $expertise = explode(',', $request->expertise);
        $skills = explode(',', $request->skills);

        $detailjobedit = detailjob_model::find($id);
        $detailjobedit->title = $request->title;
        $detailjobedit->Description = $request->Description;

        $detailjobedit->push();
        $proinfo = jobexpertise_model::where('job_id', $id);
        $proinfo->delete();

        // $detailjobid = detailjob_model::latest('id')->value('id');
        // $idlast = $saveproid->id;
        foreach ($expertise as $item) {
            $expertisejob = new jobexpertise_model;
            $expertisejob->expertiseDescription = $item;
            $expertisejob->job_id = $detailjobedit->id;
            $expertisejob->save();
        }
        $proinfo = jobskills_model::where('job_id', $id);
        $proinfo->delete();

        foreach ($skills as $item) {
            $skillsjob = new jobskills_model;
            $skillsjob->skillsDescription = $item;
            $skillsjob->job_id = $detailjobedit->id;
            $skillsjob->save();
        }


        // $saveimg = new images_model;
        // if ($request->file('image')) {
        //     $file = $request->file('image');
        //     $filename = date('YmdHi') . $file->getClientOriginalName();
        //     $file->move(public_path('assets/images/blogimages'), $filename);
        //     $saveimg['image'] = $filename;
        // }
        // $saveimg->products_id = Products_model::latest()->first('id');

        session()->flash('message', ' شغل با موفقیت ثبت شد');
        return redirect()->back();
    }




    public function cmsjobdelete($id)
    {
        $deletepro = detailjob_model::find($id);
        $deletepro->delete();
        $proinfo = jobexpertise_model::where('job_id', $id);
        $proinfo->delete();
        $proinfo = jobskills_model::where('job_id', $id);
        $proinfo->delete();
        session()->flash('message', 'شغل شما با موفقیت حذف شد');
        return redirect()->back();
    }
}
