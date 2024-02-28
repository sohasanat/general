<?php

namespace App\Http\Controllers;

use App\Models\customer;
use Illuminate\Http\Request;

class customerController extends Controller
{
    public function customercmslist(Request $request)
    {
        $customervar = customer::all();

        return view('c-customerList', compact('customervar'));
    }


    public function customercmscreat(Request $request)
    {
        return view('c-customerCreate');
    }
    public function customersave(Request $request)
    {
        $savecostom = new customer;
        $savecostom->name = $request->name;
        if ($request->file('logo')) {
            $file = $request->file('logo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('assets/images/blogimages'), $filename);
            $savecostom['logo'] = $filename;
        }

        $savecostom->save();
        session()->flash('message', ' مشتری شما با موفقیت ثبت شد');
        return redirect()->back();
    }


    public function customereditview(Request $request, $id)
    {
        $editcustomer = customer::find($id);
        return view('c-customerEdit', compact('editcustomer'));
    }



    public function customereditsave(Request $request, $id)
    {
        $savecostom = customer::find($id);;
        $savecostom->name = $request->name;
        if ($request->file('logo')) {
            $file = $request->file('logo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('assets/images/blogimages'), $filename);
            $savecostom['logo'] = $filename;
        }

        $savecostom->push();
        session()->flash('message', ' مشتری شما با موفقیت ثبت شد');
        return redirect()->back();
    }

    public function customeredelete(Request $request, $id)
    {
        $deletepro = customer::find($id);
        $deletepro->delete();
        session()->flash('message', ' مشتری شما با موفقیت حذف شد');
        return redirect()->back();
    }
}
