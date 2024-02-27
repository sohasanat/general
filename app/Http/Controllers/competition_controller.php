<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\competition_model;

class competition_controller extends Controller
{
    public function asware(Request $request)
    {
        // $role = session('role');
        // if ($role === 'Customer') {
        $opportunity = new competition_model;
        $opportunity->name = $request->name;
        $opportunity->phone = $request->phone;
        $opportunity->email = $request->email;
        $opportunity->Description = $request->Description;
        if ($request->file('resume')) {
            $file = $request->file('resume');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('assets/resume'), $filename);
            $opportunity['resume'] = $filename;
        }
        $opportunity->save();
        session()->flash('message', 'درخواست شما با موفقیت ثبت شد');
        return redirect()->back();
        // } else {
        //     session()->flash('message1', ' قبل از درخواست باید  در سایت ثبت نام کنید ');
        //     return redirect()->back();
        // }
    }
}
