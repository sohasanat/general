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
        $writingArr = explode(',', $request->writing);
        $industryArr = explode(',', $request->industry);
        $areaArr = explode(',', $request->area);
        $savepro = new Products_model;
        $savepro->name = $request->name;
        $savepro->Description = $request->Description;
        $savepro->longDescreption = $request->longDescreption;
        $savepro->storysuccess = $request->storysuccess;
        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('assets/images/blogimages'), $filename);
            $savepro['photo'] = $filename;
        }
        $savepro->save();
        $saveproid = Products_model::latest('id')->value('id');
        // $idlast = $saveproid->id;
        foreach ($areaArr as $item) {
            $hints = new hints_model;
            $hints->Description = $item;
            $hints->products_id = $saveproid;
            $hints->save();
        }
        foreach ($industryArr as $item) {
            $hints = new hints_model;
            $hints->Description = $item;
            $hints->products_id = $saveproid;
            $hints->save();
        }

        foreach ($writingArr as $item) {
            $hints = new Productinformations_model;
            $hints->Description = $item;
            $hints->products_id = $saveproid;
            $hints->save();
        }
        // $saveimg = new images_model;
        // if ($request->file('image')) {
        //     $file = $request->file('image');
        //     $filename = date('YmdHi') . $file->getClientOriginalName();
        //     $file->move(public_path('assets/images/blogimages'), $filename);
        //     $saveimg['image'] = $filename;
        // }
        // $saveimg->products_id = Products_model::latest()->first('id');

        session()->flash('message', ' محصول شما با موفقیت ثبت شد');
        return redirect()->back();
    }


    public function producteditsave(Request $request, $id)
    {
        $writingArr = explode(',', $request->writing);
        $industryArr = explode(',', $request->industry);
        $areaArr = explode(',', $request->area);
        $savepro = Products_model::find($id);
        $savepro->name = $request->name;
        $savepro->Description = $request->Description;
        $savepro->longDescription = $request->longDescription;
        $savepro->storysuccess = $request->storysuccess;
        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('assets/images/blogimages'), $filename);
            $savepro['photo'] = $filename;
        }
        $savepro->push();
        // $saveproid = Products_model::latest('id')->value('id');
        // $idlast = $saveproid->id;
        $hints = hints_model::where('products_id', $id);
        $hints->delete();
        foreach ($areaArr as $item) {
            $hints = new hints_model;
            $hints->Description = $item;
            $hints->products_id = $savepro->id;
            $hints->save();
        }
        foreach ($industryArr as $item) {
            $hints = new hints_model;
            $hints->Description = $item;
            $hints->products_id = $savepro->id;
            $hints->save();
        }

        $proinfo = Productinformations_model::where('products_id', $id);
        $proinfo->delete();

        foreach ($writingArr as $item) {
            $hints = new Productinformations_model;
            $hints->Description = $item;
            $hints->products_id = $savepro->id;
            $hints->save();
        }
        // $saveimg = new images_model;
        // if ($request->file('image')) {
        //     $file = $request->file('image');
        //     $filename = date('YmdHi') . $file->getClientOriginalName();
        //     $file->move(public_path('assets/images/blogimages'), $filename);
        //     $saveimg['image'] = $filename;
        // }
        // $saveimg->products_id = Products_model::latest()->first('id');

        session()->flash('message', ' محصول شما با موفقیت ثبت شد');
        return redirect()->back();
    }

    public function productcmslist()
    {
        $productsvar = Products_model::all();
        return view('c-productList', compact('productsvar'));
    }





    public function producteditview($id)
    {
        $editpro = Products_model::find($id);

        $hints = hints_model::where('products_id', $id)->get();

        $proinfo = Productinformations_model::where('products_id', $id)->get();

        return view('c-productEdit', compact('editpro', 'hints', 'proinfo'));
    }


    public function productedelete($id)
    {
        $deletepro = Products_model::find($id);
        $deletepro->delete();
        $hints = hints_model::where('products_id', $id);
        $hints->delete();
        $proinfo = Productinformations_model::where('products_id', $id);
        $proinfo->delete();
        session()->flash('message', 'محصول شما با موفقیت حذف شد');
        return redirect()->back();
    }
}
