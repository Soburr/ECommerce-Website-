<?php

namespace App\Http\Controllers;

use App\Models\Product;

use Illuminate\Http\Request;


class CartController extends Controller
{

    public function cart()
    {
        return view('dashboard.cart');
    }

    public function addToCart($id)
    {
        $products = Product::findOrFail($id);

        $cart = session()->get('cart', []);

        if(isset($cart[$id])) {
           $cart[$id]['quantity']++;
        }
        else {
            $cart[$id] = [
              "title" => $products->title,
              "quantity" => 1,
              "image_path" => $products->image_path,
              "fee" => $products->fee,
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product Has Been Added To Cart Successfully');
    }


    public function update(Request $request) {
       if ($request->id && $request->quantity) {
          $cart = session()->get('cart');
          $cart[$request->id]["quantity"] = $request->quantity;
          session()->put('cart', $cart);
          session()->flash('success', 'Cart has been updated Successfully');
       }
    }

    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }

    public function clear(Request $request)
    {
        if($request->all) {
            $cart = session()->get('cart');
            if(isset($cart[$request->all()])) {
                unset($cart[$request->all()]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }

}
