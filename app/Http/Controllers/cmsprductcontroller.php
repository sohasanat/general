<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products_model;
use App\Models\hints_model;
use App\Models\Productinformations_model;
use App\Models\images_model;
use App\Models\demo_model;
use App\Models\productcomment_model;


class cmsprductcontroller extends Controller
{
    public function cmsproduct()
    {

        return view('c-productCreate.blade');
    }


    public function productsave(Request $request)
    {
        $savepro = new Products_model;
        $savepro->name = $request->name;
        $savepro->Description = $request->Description;

        $savepro->storysuccess = $request->storysuccess;
        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('assets/images/blogimages'), $filename);
            $savepro['photo'] = $filename;
        }
        $savepro->save();
        $savehint = new hints_model;
        $savehint->Description = $request->Description1;
        $savehint->products_id = Products_model::latest()->first('id');

        $saveimg = new images_model;
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('assets/images/blogimages'), $filename);
            $saveimg['image'] = $filename;
        }
        $saveimg->products_id = Products_model::latest()->first('id');

        session()->flash('message', ' وبلاگ شما با موفقیت ثبت شد');
        return redirect()->back();
    }


    public function productcmslist()
    {
        $productsvar = Products_model::all();
        return view('c-productList', compact('productsvar'));
    }
}
