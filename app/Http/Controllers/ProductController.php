<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function product () {
        $products = Product::all();
        return view('dashboard.product')->with('products', $products);
    }

    public function productId ($id) {

        $products = Product::findOrFail($id);
        return view('dashboard.description')->with('products', $products);
    }

}
