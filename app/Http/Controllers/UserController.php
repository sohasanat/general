<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\blog_model;
use App\Models\Company;


class UserController extends Controller
{

    public function user(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        if ($user && password_verify($request->password, $user->password)) {
            $role = $user->role;
            $request->attributes->add(['role' => $role]);
            session()->put('role', $role);
            return redirect()->route('main.company');
        } else {
            // مدیریت خطا: نام کاربری یا رمز عبور نادرست است
            return redirect()->back()->with('error', 'نام کاربری یا رمز عبور نادرست است.');
        }
    }



    public function userrequest(Request $request)
    {
        $connects = new User;
        $connects->name = $request->name;
        $connects->email = $request->email;
        $connects->password = bcrypt($request->password);

        $connects->save();
        session()->flash('message', 'با موفقیت ثبت شدید');
        $blogmainall = blog_model::take(4)->get();
        $companyvar = Company::all();

        return view('main', compact('companyvar', 'blogmainall'));
    }

    public function logout(Request $request)
    {

        $request->session()->forget('role');
        $blogmainall = blog_model::take(4)->get();
        $companyvar = Company::all();

        return view('main', compact('companyvar', 'blogmainall'));
    }
}
