<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home1(Request $request)
    {
        return view('home.index');
    }

    public function home2(Request $request)
    {
        return view('home.index-2');
    }

    public function home3(Request $request)
    {
        return view('home.index-3');
    }
}
