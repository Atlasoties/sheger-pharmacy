<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MiscellaneousController extends Controller
{
    public function error(Request $request)
    {
        return view('misc.404');
    }
    public function coming_soon(Request $request)
    {
        return view('misc.coming-soon');
    }
    public function history(Request $request)
    {
        return view('misc.history');
    }
}
