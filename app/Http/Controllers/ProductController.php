<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product () {
        $product = Product::all();
        return view('dashboard.product', compact('product'));
    }
}