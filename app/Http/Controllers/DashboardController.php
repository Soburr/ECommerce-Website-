<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index () {
            $products = Product::paginate(5);
            return view('dashboard.index')->with('products', $products);
        }

    public function about () {
         return view('dashboard.about');
    }

    public function contact () {
        return view('dashboard.contact');
    }

    public function logout () {
        auth()->logout();
        return redirect('/');
    }
}
