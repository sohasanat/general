<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products_model;
use App\Models\hints_model;
use App\Models\Productinformations_model;
use App\Models\images_model;

class Products_contrller extends Controller
{
    public function productsender()
    {
        $allproductsvar = Products_model::all();
        return view('products', compact('allproductsvar'));
    }

    public function productdetails($id)
    {
        $productsvar = Products_model::find($id);
        if ($productsvar) {
            $hintsvar = hints_model::where('products_id', $id)->get('Description');
            $informationvar = Productinformations_model::where('products_id', $id)->get('Description');
            $productimg = images_model::where('products_id', $id)->get('image');
            $reltionproductsvar = Products_model::where('company_id', $productsvar->company_id)->get();
            return view('single-product', compact('productsvar', 'hintsvar', 'informationvar', 'productimg', 'reltionproductsvar'));
        } else {

            $allproductsvar = Products_model::all();
            return view('products', compact('allproductsvar'));
        }
    }
}
