<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\model_tiket_table;
use App\Models\model_tiket_massage_table;
use App\Models\User;

use Illuminate\Database\Eloquent\Collection;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
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
    session()->flash('message', 'نظر شما با موفقیت ثبت شد');
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
    $massage->tiket_id = $request->tiket_id;

    $massage->file = $request->file;
    $massage->from = $request->from;
    $massage->Description = $request->Description;

    $massage->save();
    return redirect()->back();
  }



  public function cmstiketall()
  {
    $id = session('id');

    $alltiket = model_tiket_table::paginate(2); // Apply paginate directly to the query builder
    $products = Products_model::all();
    $username = User::find($id);

    return view('ticketing.c-ticketList', compact('username', 'alltiket', 'products'));
  }



  public function cmsshowMessages($id)
  {
    $messages = model_tiket_massage_table::where('tiket_id', $id)->get();
    if ($messages) {
      $tiket = model_tiket_table::find($id);

      $id1 = session('id');
      $username = User::find($id1);
      return view('ticketing.c-ticketDetail',  compact('username', 'messages', 'tiket'));
    } else {

      $id = session('id');

      $alltiket = model_tiket_table::where('idtiket', $id)->orderBy('created_at')->get();


      $username = User::find($id);
      return view('ticketing.ticketList', compact('username', 'alltiket'));
    }
  }


  public function cmssavemessege(Request $request)
  {
    $massage = new model_tiket_massage_table;
    $massage->tiket_id = $request->tiket_id;

    $massage->file = $request->file;
    $massage->from = $request->from;
    $massage->Description = $request->Description;

    $massage->save();
    $statuse = model_tiket_table::find($request->tiket_id);
    $statuse->status = "بررسی شده";
    $statuse->push();
    return redirect()->back();
  }



  public function filtering(Request $request)
  {
    $id = session('id');
    $query = model_tiket_table::query();

    if ($request->receiver != 'other') {
      $query->where('receiver', $request->receiver);
    }

    if ($request->section != 'other') {
      $query->where('section', $request->section);
    }

    if ($request->importent != 'other') {
      $query->where('importent', $request->importent);
    }

    if ($request->status != 'other') {
      $query->where('status', $request->status);
    }

    $alltiket = $query->get();
    $products = Products_model::all();
    $username = User::find($id);

    return view('ticketing.c-ticketList', compact('username', 'alltiket', 'products'));
  }
  public function history($id)
  {
    $id1 = session('id');
    $query = model_tiket_table::query();


    $query->where('idtiket', $id);




    $alltiket = $query->get();
    $products = Products_model::all();
    $username = User::find($id1);

    return view('ticketing.c-ticketList', compact('username', 'alltiket', 'products'));
  }













  public function searchTicket(Request $request)
  {
    if ($request->ajax()) {
      $search = "%" . $request->search . "%";
      $output = '';
      $allTickets = model_tiket_table::where('title', 'LIKE', $search)->get();


      foreach ($allTickets as $message) {

        if ($message->importent === 'مهم' && $message->status === 'بررسی شده') {
          $output .= '

          <a href="' . route('cmsmassage.view', $message->id) . '">

            <div class=" bg-white rounded-lg px-4 box-ticket mt-3 border-red">
              <div class="flex border-b py-3 justify-between gap-x-2">
                <div class="flx-1 flex gap-x-2 flex-wrap"><span class="font-YekanBakh-SemiBold">وضعیت: </span><span>' . $message->status . '</span></div>
                <div>' . $message->date . '</div>
              </div>
              <div class="py-3 flex">
                <span class="font-YekanBakh-SemiBold w-20">عنوان پیام: </span>
                <p class="line1 flex-1">' . $message->title . '</p>
                <div class="flex flex-end mt-3 w-5 mr-3"><img src="../../assets/images/DoubleCheck.svg" alt=""></div>

              </div>
            </div>
          </a>';
        } elseif ($message->importent === 'مهم') {
          $output .= '
          <a href="' . route('cmsmassage.view', $message->id) . '">

            <div class=" bg-white rounded-lg px-4 box-ticket mt-3 border-red">
              <div class="flex border-b py-3 justify-between gap-x-2">
                <div class="flx-1 flex gap-x-2 flex-wrap"><span class="font-YekanBakh-SemiBold">وضعیت: </span><span>' . $message->status . '</span></div>
                <div>' . $message->date . '</div>
              </div>
              <div class="py-3 flex">
                <span class="font-YekanBakh-SemiBold w-20">عنوان پیام: </span>
                <p class="line1 flex-1">' . $message->title . '</p>


              </div>
            </div>
          </a>';
        } elseif ($message->status === 'بررسی شده') {
          $output .= '
          <a href=href="' . route('cmsmassage.view', $message->id) . '">
            <div class="bg-white rounded-lg px-4 box-ticket mt-3">
              <div class="flex border-b py-3 justify-between gap-x-2">
                <div class="flx-1 flex gap-x-2 flex-wrap"><span class="font-YekanBakh-SemiBold">وضعیت: </span><span>' . $message->status . '</span></div>
                <div>' . $message->date . '</div>
              </div>
              <div class="py-3 flex">
                <span class="font-YekanBakh-SemiBold w-20">عنوان پیام: </span>
                <p class="line1 flex-1">' . $message->title . '</p>
                <div class="flex flex-end mt-3 w-5 mr-3"><img src="../../assets/images/DoubleCheck.svg" alt=""></div>

              </div>
            </div>
          </a>
                ';
        } else {
          $output .= '
          <a href=href="' . route('cmsmassage.view', $message->id) . '">
            <div class="bg-white rounded-lg px-4 box-ticket mt-3">
              <div class="flex border-b py-3 justify-between gap-x-2">
                <div class="flx-1 flex gap-x-2 flex-wrap"><span class="font-YekanBakh-SemiBold">وضعیت: </span><span>' . $message->status . '</span></div>
                <div>' . $message->date . '</div>
              </div>
              <div class="py-3 flex">
                <span class="font-YekanBakh-SemiBold w-20">عنوان پیام: </span>
                <p class="line1 flex-1">' . $message->title . '</p>


              </div>
            </div>
          </a>
                ';
        }
      }
      return response()->json($output);
    }
  }
}
