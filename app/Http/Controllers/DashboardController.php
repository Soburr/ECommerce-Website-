<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index () {
       
        return view('dashboard.index');
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