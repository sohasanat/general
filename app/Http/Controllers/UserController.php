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



    public function sendVerificationCode(Request $request)
    {



        $user1 = User::where('email', $request->email)->exists();

        if ($user1) {


            $user = $request->email;

            // ایجاد یک کد تصادفی 4 رقمی
            $email = str_pad(mt_rand(1, 9999), 4, '0', STR_PAD_LEFT);
            // dd($verificationCode);
            // ذخیره کد تصادفی در دیتابیس
            $user1 = User::where('email', $user)->first();
            $user1->verification_code = $email;
            $user1->save();

            Mail::to($user)->send(new WelcomeEmail($email));
        } else {

            session()->flash('message', 'این ایمیل قبلا ثبت نشده است');
            return redirect()->back();
        }
    }
}
