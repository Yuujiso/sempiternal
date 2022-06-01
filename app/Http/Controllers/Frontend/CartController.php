<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addProduct(Request $request) {
        $product_id = $request->input('product_id');
        $product_quantity = $request->input('product_quantity');

        if(Auth::check())
        {
            $product_check = Product::where('id', $product_id)->first();

            if($product_check)
            {
                if(Cart::where('product_id',$product_id)->where('user_id', Auth::id())->exists())
                {
                    return response()->json(['status' => $product_check->name." Already added to cart"]);
                }
                else
                {
                    $cartItem = new Cart();
                    $cartItem->product_id = $product_id;
                    $cartItem->user_id = Auth::id();
                    $cartItem->product_quantity = $product_quantity;
                    $cartItem->save();
                    return response()->json(['status' => $product_check->name." Added to cart"]);

                }
            }
        }
        else
        {
            return response()->json(['status' => "Login to Continue"]);
        }
    }

    public function viewcart()
    {
        $cartitems = Cart::where('user_id', Auth::id())->get();
        return view('frontend.cart', compact('cartitems'));
    }

    public function deleteproduct(Request $request)
    {
        if(Auth::check())
        {
            $product_id = $request->input('product_id');
            if (Cart::where('product_id',$product_id)->where('user_id',Auth::id())->exists())
            {
                $cartItem = Cart::where('product_id',$product_id)->where('user_id',Auth::id())->first();
                $cartItem->delete();
                return response()->json(['status' => "Product Removed Successfully"]);
            }
        }
        else
        {
            return response()->json(['status' => "Login to Continue"]);
        }
    }

    public function updatecart(Request $request)
    {
        $product_id = $request->input('product_id');
        $product_qty = $request->input('product_quantity');

        if(Auth::check())
        {
            if (Cart::where('product_id',$product_id)->where('user_id',Auth::id())->exists())
            {
                $cart = Cart::where('product_id', $product_id)->where('user_id',Auth::id())->first();
                $cart->product_quantity = $product_qty;
                $cart->update();
                return response()->json(['status' => "Quantity updated"]);
            }
        }
    }
}
