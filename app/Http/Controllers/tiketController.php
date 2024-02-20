<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\model_tiket_table;
use App\Models\model_tiket_massage_table;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerifyCodeEmail;

class tiketController extends Controller
{

    public function savetiket(Request $request)
    {
        $id = session('id');
        $username = User::find($id);
        $tiket = new model_tiket_table;
        $tiket->idtiket = $id;
        $tiket->name = $username->name;
        $tiket->email = $username->email;
        $tiket->title = $request->title;
        $tiket->receiver = $request->receiver;
        $tiket->section = $request->section;
        $tiket->importent = $request->importent;
        $tiket->save();
        session()->flash('message', 'نظر شما با موفقیت ثبت شد');
        return redirect()->back();
    }
}
