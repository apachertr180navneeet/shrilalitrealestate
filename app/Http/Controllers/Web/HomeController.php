<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('web.home.index');
    }


    public function about_us()
    {
        return view('web.home.about');
    }


    public function gallery()
    {
        return view('web.home.gallery');
    }


    public function contact()
    {
        return view('web.home.contact');
    }
}
