<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\model_tiket_table;
use App\Models\model_tiket_massage_table;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerifyCodeEmail;
use App\Models\Products_model;

class tiketController extends Controller
{



    public function tiketall()
    {
        $id = session('id');

        $alltiket = model_tiket_table::where('idtiket', $id)->orderBy('created_at')->get();


        $username = User::find($id);
        return view('ticketing.ticketList', compact('username', 'alltiket'));
    }
    public function tiketcreat()
    {
        $id = session('id');
        $username = User::find($id);
        $products = Products_model::all();
        return view('ticketing.ticketCreate', compact('username', 'products'));
    }


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
        $tiket->date = $request->date;
        // $tiket->resume = $request->resume;


        $tiket->save();
        $saveproid = model_tiket_table::latest('id')->value('id');
        $massage = new model_tiket_massage_table;
        $massage->tiket_id = $saveproid;
        $massage->title = $request->title;
        $massage->file = $request->resume;
        $massage->from = $username->id;
        $massage->Description = $request->storysuccess;

        $massage->save();

        return redirect()->back();
    }


    public function showMessages($id)
    {
        $messages = model_tiket_massage_table::where('tiket_id', $id)->get();
        if ($messages) {
            $tiket = model_tiket_table::find($id);

            $id1 = session('id');
            $username = User::find($id1);
            return view('ticketing.ticketDetail',  compact('username', 'messages', 'tiket'));
        } else {

            $id = session('id');

            $alltiket = model_tiket_table::where('idtiket', $id)->orderBy('created_at')->get();


            $username = User::find($id);
            return view('ticketing.ticketList', compact('username', 'alltiket'));
        }
    }


    public function savemessege(Request $request)
    {
        $massage = new model_tiket_massage_table;
        $massage->tiket_id = $request->tiket;

        $massage->file = $request->file;
        $massage->from = $request->from;
        $massage->Description = $request->Description;

        $massage->save();
        session()->flash('message', 'نظر شما با موفقیت ثبت شد');
        return redirect()->back();
    }
}
