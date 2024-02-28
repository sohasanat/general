<?php

namespace App\Http\Controllers;


use App\Mail\WelcomeEmail;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\blog_model;
use App\Models\Company;
use Illuminate\Support\Facades\Mail;


class UserController extends Controller
{


    public function saveUserRoleAndId($id, $role)
    {

        session()->put('role', $role);
        session()->put('id', $id);
    }

    public function user(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        if ($user && password_verify($request->password, $user->password)) {
            $role = $user->role;
            $id = $user->id;
            $this->saveUserRoleAndId($id, $role);
            session()->flash('message', 'با موفقیت وارد شدید');
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
            $userr = new User;
            $userr->name = $request->name;
            $userr->email = $request->email;
            $userr->password = bcrypt($request->password);

            $userr->save();
            $user = User::latest()->first();
            $id = $user->id;
            $role = $user->role;
            $this->saveUserRoleAndId($id, $role);

            session()->flash('message', 'با موفقیت ثبت شدید');
            // $blogmainall = blog_model::take(4)->get();
            // $companyvar = Company::all();
            session()->flash('message', 'با موفقیت وارد شدید');
            return redirect()->route('main.company');
        }
    }

    public function logout(Request $request)
    {

        $request->session()->forget('role');
        $request->session()->forget('id');
        $blogmainall = blog_model::take(4)->get();
        $companyvar = Company::all();

        return view('main', compact('companyvar', 'blogmainall'));
    }

    public function losst(Request $request)
    {


        return view('lost-password');
    }



    public function passwordchange(Request $request)
    {;

        if ($request->pass1 === $request->pass2) {
            $id = User::where('email', $request->user)->first();
            $id->password = $request->pass2;
            $id->push();
            return view('login');
        } {

            session()->flash('message', ' کد اشتباه است ');
            return redirect()->back();
        }
    }



    public function code(Request $request)
    {

        $id = User::where('email', $request->mail)->first();
        $vrify = $id->verification_code;
        if ($vrify === $request->code) {
            $passcode = $id->email;
            return view('codeVerify', compact('passcode'));
        } {

            session()->flash('message', ' کد اشتباه است ');
            return redirect()->back();
        }
    }
    public function sendVerificationCode(Request $request)
    {



        $user1 = User::where('email', $request->email)->exists();

        if ($user1) {


            $user = $request->email;

            // ایجاد یک کد تصادفی 4 رقمی
            $verificationCode = str_pad(mt_rand(1, 9999), 4, '0', STR_PAD_LEFT);
            // dd($verificationCode); 
            // ذخیره کد تصادفی در دیتابیس
            $user1 = User::where('email', $user)->first();

            $user1->verification_code = $verificationCode;
            $user1->save();

            $vri = User::where('email', $user)->first();
            $data = $vri->email;

            Mail::to($user)->send(new WelcomeEmail($verificationCode));


            // return view('code-email', compact('verificationCode'));
            return view('lost-password-vrify', compact('vri'));
        } else {

            session()->flash('message', 'این ایمیل قبلا ثبت نشده است');
            return redirect()->back();
        }
    }
}
