<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\blog_model;
use App\Models\Company;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerifyCodeEmail;


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
        $emailExists = User::where('email', $request->email)->exists();

        if ($emailExists) {
            session()->flash('message', 'این ایمیل قبلا ثبت شده است');
            return redirect()->back();
        } else {
            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);

            $user->save();


            session()->flash('message', 'با موفقیت ثبت شدید');
            $blogmainall = blog_model::take(4)->get();
            $companyvar = Company::all();

            return view('main', compact('companyvar', 'blogmainall'));
        }
    }

    public function logout(Request $request)
    {

        $request->session()->forget('role');
        $blogmainall = blog_model::take(4)->get();
        $companyvar = Company::all();

        return view('main', compact('companyvar', 'blogmainall'));
    }

    public function losst(Request $request)
    {


        return view('lost-password');
    }



    public function sendVerificationCode(Request $request)
    {



        $emailExists = User::where('email', $request->email)->exists();

        if ($emailExists) {
            $userEmail = $request->email;

            // ایجاد یک کد تصادفی 4 رقمی
            $verificationCode = str_pad(mt_rand(1, 9999), 4, '0', STR_PAD_LEFT);
            // dd($verificationCode);
            // ذخیره کد تصادفی در دیتابیس
            $user = User::where('email', $userEmail)->first();
            $user->verification_code = $verificationCode;
            $user->save();

            Mail::to($userEmail)->send(new VerifyCodeEmail($verificationCode));
        } else {

            session()->flash('message', 'این ایمیل قبلا ثبت نشده است');
            return redirect()->back();
        }
    }
}
