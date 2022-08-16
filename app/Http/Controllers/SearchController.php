<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search (Request $request) {
       $search = $request->input('search');
       $products = Product::query()->where('title', 'LIKE', "%{$search}%")->get();

       return view('dashboard.index', compact('products'));
    }

}
