<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product () {
        $products = Product::all();
        return view('dashboard.product')->with('products', $products);
    }

}
