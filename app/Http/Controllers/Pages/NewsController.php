<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function blog(Request $request)
    {
        return view('news.blog');
    }

    public function blog_details(Request $request)
    {
        return view('news.blog-details');
    }

    public function blog_grid(Request $request)
    {
        return view('news.blog-grid');
    }

    public function blog_right(Request $request)
    {
        return view('news.blog-right-sidebar');
    }

    public function blog_left(Request $request)
    {
        return view('news.blog-left-sidebar');
    }
}
