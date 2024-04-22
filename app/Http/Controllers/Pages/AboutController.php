<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(Request $request)
    {
        return view('about.about');
    }

    public function service(Request $request)
    {
        return view('about.service');
    }

    public function service_details(Request $request)
    {
        return view('about.service-details');
    }

    public function portfolio(Request $request)
    {
        return view('about.portfolio');
    }

    public function portfolio_2(Request $request)
    {
        return view('about.portfolio-2');
    }

    public function portfolio_details(Request $request)
    {
        return view('about.portfolio-details');
    }

    public function team(Request $request)
    {
        return view('about.team');
    }

    public function team_details(Request $request)
    {
        return view('about.team-details');
    }

    public function faq(Request $request)
    {
        return view('about.faq');
    }

    public function locations(Request $request)
    {
        return view('about.locations');
    }
}
