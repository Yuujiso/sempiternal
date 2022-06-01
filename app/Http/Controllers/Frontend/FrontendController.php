<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $featured_products = Product::all();
        return view('frontend.index', compact('featured_products'));
    }

    public function viewproduct($slug)
    {
        if(Product::where('slug', $slug)->exists())
        {
            $products = Product::where('slug', $slug)->first();
            return view('frontend.products.view', compact('products'));
        }
        else
        {
            return redirect('/')->with('status',"Slug does not exitsts");
        }

    }
}
