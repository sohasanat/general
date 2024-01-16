<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products_model;
use App\Models\hints_model;
use App\Models\Productinformations_model;
use App\Models\images_model;
use App\Models\demo_model;
use App\Models\productcomment_model;

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


    public function productdemo(Request $request)
    {
        $demovar = new demo_model;
        $demovar->fullname = $request->fullname;
        $demovar->phone = $request->phone;
        $demovar->company = $request->company;
        $demovar->post = $request->post;
        $demovar->email = $request->email;

        $demovar->setAttribute('demo', $request->has('demo'));

        $demovar->setAttribute('broshor', $request->has('broshor'));

        $demovar->save();
        session()->flash('message', ' وبلاگ شما با موفقیت ثبت شد');
        return redirect()->back();
    }


    public function productcomments(Request $request)
    {
        $procomments = new productcomment_model;
        $procomments->name = $request->name;
        $procomments->email = $request->email;
        $procomments->Description = $request->Description;
        $procomments->products_id = $request->param_name;

        $procomments->save();
        session()->flash('message', 'نظر شما با موفقیت ثبت شد');
        return redirect()->back();
    }


    public function products(Request $request)
    {

        if ($request->ajax()) {
            $search = "%" . $request->search . "%";
            $output = '';
            $products = Products_model::where('name', 'LIKE', $search)->get();

            if ($products) {
                foreach ($products as $product) {
                    $output .= '

                        <a  href="' . route('product.details', $product->id) . '" class="bg-white border-box displayflex p-6 rounded-3xl leading-8 transform hover:-translate-y-1 duration-300 transition-transform product-show">
                        <div class="w-10 mb-4">
                            <img src=' . $product->logo . ' alt="">
                        </div>

                        <div class="flex items-center mb-4">
                            <h2 class="font-YekanBakh-ExtraBold text-base mr-1">' . $product->name . '</h2>
                        </div>
                        <div>
                            <p class="line3">' . $product->Description . '</p>
                        </div>
                        </a>
';
                }
                return response()->json($output);
            }
        }
    }

    public function productsfill(Request $request)
    {
        $filloutput = '';
        $categories = $request->input('categories');

        // Query the products based on the selected categories
        $products = Products_model::whereIn('Grouping', $categories)->get();
        if ($products) {
            foreach ($products as $product) {
                $filloutput .= '

                        <a  href="' . route('product.details', $product->id) . '" class="bg-white border-box displayflex p-6 rounded-3xl leading-8 transform hover:-translate-y-1 duration-300 transition-transform product-show">
                        <div class="w-10 mb-4">
                            <img src=' . $product->logo . ' alt="">
                        </div>

                        <div class="flex items-center mb-4">
                            <h2 class="font-YekanBakh-ExtraBold text-base mr-1">' . $product->name . '</h2>
                        </div>
                        <div>
                            <p class="line3">' . $product->Description . '</p>
                        </div>
                        </a>
';
            }
            // Return the filtered products as JSON
            return response()->json($filloutput);
        }
    }
}
