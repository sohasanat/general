<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\connectus_model;

class connectus_contrller extends Controller
{
    public function connectes()
    {

        return view('contact-us');
    }

    public function connectescomment(Request $request)
    {
        $role = session('role');
        if ($role === 'Customer') {

            $connects = new connectus_model;
            $connects->title = $request->title;
            $connects->email = $request->email;
            $connects->Description = $request->Description;

            $connects->save();
            session()->flash('message', 'نظر شما با موفقیت ثبت شد . ممنون از نظر خوب شما');
            return redirect()->back();
        } else {
            session()->flash('message1', ' قبل از درخواست باید  در سایت ثبت نام کنید ');
            return redirect()->back();
        }
    }
}
